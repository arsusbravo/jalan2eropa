<?php

namespace App\Support;

use Closure;
use DOMDocument;
use DOMElement;
use DOMXPath;

class LegacyHtml
{
    /**
     * Hosts whose links and embeds are affiliate/partner elements that must not be rendered.
     *
     * @var list<string>
     */
    private const AFFILIATE_HOSTS = ['booking.com', 'agoda.com', 'agoda.net'];

    /**
     * Legacy hosts whose absolute links point at this site (or its old domain).
     *
     * @var list<string>
     */
    private const INTERNAL_HOSTS = ['jalan2eropa.com', 'toureropa.com'];

    /**
     * Clean legacy database HTML so it is safe and consistent to render.
     *
     * Strips scripts, affiliate links/widgets and inline styling, repairs the
     * literal "\n" sequences and rewrites old asset URLs to the public disk.
     *
     * Legacy hotel links (the old Booking.com anchors, one per hotel) are
     * re-pointed with `$hotelLinker`, which maps a hotel name to a tracked
     * search URL. Without a linker they are reduced to plain text.
     *
     * @param  (Closure(string): ?string)|null  $hotelLinker
     */
    public static function clean(?string $html, ?Closure $hotelLinker = null): string
    {
        $html = trim((string) $html);

        if ($html === '') {
            return '';
        }

        $html = str_replace(['\\r\\n', '\\n', '\\r'], "\n", $html);
        $html = str_replace('/assets/images/', '/storage/images/', $html);

        $document = new DOMDocument;
        libxml_use_internal_errors(true);
        $document->loadHTML('<?xml encoding="utf-8" ?><div id="legacy-root">'.$html.'</div>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $xpath = new DOMXPath($document);

        foreach ($xpath->query('//script|//style|//object|//embed|//form') as $node) {
            $node->parentNode?->removeChild($node);
        }

        foreach ($xpath->query('//iframe') as $iframe) {
            if (! $iframe instanceof DOMElement || ! self::isTrustedEmbed($iframe->getAttribute('src'))) {
                $iframe->parentNode?->removeChild($iframe);
            }
        }

        foreach ($xpath->query('//a') as $anchor) {
            if (! $anchor instanceof DOMElement) {
                continue;
            }

            $host = self::host($anchor->getAttribute('href'));

            if (self::hostMatches($host, ['booking.com']) && $hotelLinker !== null) {
                $name = trim($anchor->getAttribute('title') ?: $anchor->textContent);
                $url = $name !== '' ? $hotelLinker(html_entity_decode($name, ENT_QUOTES | ENT_HTML5)) : null;

                if ($url !== null) {
                    $anchor->setAttribute('href', $url);
                    $anchor->setAttribute('target', '_blank');
                    $anchor->setAttribute('rel', 'sponsored nofollow noopener');
                    $anchor->setAttribute('data-hotel', '');

                    continue;
                }
            }

            if (self::hostMatches($host, self::AFFILIATE_HOSTS) || self::hostMatches($host, ['toureropa.com'])) {
                self::unwrap($anchor);

                continue;
            }

            if (self::hostMatches($host, self::INTERNAL_HOSTS)) {
                $anchor->setAttribute('href', self::internalPath($anchor->getAttribute('href')));
            } elseif ($host === null && str_starts_with($anchor->getAttribute('href'), '/negara/')) {
                $anchor->setAttribute('href', self::internalPath($anchor->getAttribute('href')));
            } elseif ($host !== null) {
                $anchor->setAttribute('target', '_blank');
                $anchor->setAttribute('rel', 'noopener noreferrer');
            }
        }

        foreach ($xpath->query('//*') as $element) {
            if (! $element instanceof DOMElement) {
                continue;
            }

            foreach (['style', 'width', 'height', 'align', 'class', 'target'] as $attribute) {
                if ($attribute === 'target' && $element->nodeName === 'a') {
                    continue;
                }

                $element->removeAttribute($attribute);
            }

            foreach (iterator_to_array($element->attributes) as $attribute) {
                if (str_starts_with($attribute->name, 'on')) {
                    $element->removeAttribute($attribute->name);
                }
            }

            if ($element->nodeName === 'a' && str_starts_with(strtolower($element->getAttribute('href')), 'javascript:')) {
                $element->removeAttribute('href');
            }

            if ($element->nodeName === 'img') {
                $element->setAttribute('loading', 'lazy');
            }
        }

        $root = $document->getElementById('legacy-root');
        $output = '';

        foreach ($root?->childNodes ?? [] as $child) {
            $output .= $document->saveHTML($child);
        }

        return trim($output);
    }

    /**
     * Strip all markup and return a short plain-text excerpt.
     */
    public static function excerpt(?string $html, int $limit = 160): string
    {
        $text = html_entity_decode(strip_tags(str_replace(['\\r\\n', '\\n'], ' ', (string) $html)), ENT_QUOTES | ENT_HTML5);

        return str(preg_replace('/\s+/u', ' ', $text))->trim()->limit($limit)->toString();
    }

    /**
     * Convert a legacy internal URL to a path that exists on this site.
     *
     * Old section URLs such as /negara/{country}/belanja become anchors on the country page.
     */
    private static function internalPath(string $url): string
    {
        $path = (string) parse_url($url, PHP_URL_PATH) ?: '/';

        if (preg_match('#^/negara/([a-z0-9-]+)/(belanja|makan-minum)$#', $path, $matches)) {
            return '/negara/'.$matches[1].'#'.($matches[2] === 'belanja' ? 'belanja' : 'kuliner');
        }

        return $path;
    }

    private static function isTrustedEmbed(string $src): bool
    {
        return self::hostMatches(self::host($src), ['youtube.com', 'youtube-nocookie.com', 'google.com']);
    }

    private static function host(string $url): ?string
    {
        $url = str_starts_with($url, '//') ? 'https:'.$url : $url;
        $host = parse_url($url, PHP_URL_HOST);

        return is_string($host) ? strtolower($host) : null;
    }

    /**
     * @param  list<string>  $hosts
     */
    private static function hostMatches(?string $host, array $hosts): bool
    {
        if ($host === null) {
            return false;
        }

        foreach ($hosts as $candidate) {
            if ($host === $candidate || str_ends_with($host, '.'.$candidate)) {
                return true;
            }
        }

        return false;
    }

    private static function unwrap(DOMElement $element): void
    {
        $parent = $element->parentNode;

        while ($element->firstChild !== null) {
            $parent?->insertBefore($element->firstChild, $element);
        }

        $parent?->removeChild($element);
    }
}

<?php

namespace App\Support;

use App\Models\Affiliate;
use Closure;

class HotelLinker
{
    private ?Affiliate $program = null;

    private bool $resolved = false;

    /**
     * Tracked search URL for one hotel, or null when no hotel program can search by name.
     */
    public function url(string $hotelName): ?string
    {
        $program = $this->program();

        if ($program === null) {
            return null;
        }

        $search = AffiliateLink::fromTemplate($program->hotel_search_template ?: $program->search_template, $hotelName);

        return $search === null ? null : AffiliateLink::url($program, $search);
    }

    /**
     * A closure for LegacyHtml::clean(), or null when hotel links are unavailable.
     *
     * @return (Closure(string): ?string)|null
     */
    public function closure(): ?Closure
    {
        return $this->program() === null ? null : fn (string $name): ?string => $this->url($name);
    }

    /**
     * The first active hotel program that supports searching by name (resolved once per request).
     */
    private function program(): ?Affiliate
    {
        if (! $this->resolved) {
            $this->program = Affiliate::query()
                ->active()
                ->forCategory('hotel')
                ->whereNotNull('search_template')
                ->orderBy('sort')
                ->orderBy('id')
                ->first();
            $this->resolved = true;
        }

        return $this->program;
    }
}

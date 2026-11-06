<?php

use App\Support\LegacyHtml;

test('it repairs literal newline sequences and legacy asset paths', function () {
    $html = LegacyHtml::clean('<p>Satu</p>\n<img src="/assets/images/article/foto.jpg" style="float:right" width="300">');

    expect($html)
        ->not->toContain('\n')
        ->toContain('/storage/images/article/foto.jpg')
        ->not->toContain('style=')
        ->not->toContain('width=');
});

test('it unwraps affiliate links but keeps their text', function () {
    $html = LegacyHtml::clean('<p><a href="https://www.booking.com/hotel/x.html?aid=1">Hotel Mewah</a> dan <a href="https://agoda.com/y">Hotel Lain</a></p>');

    expect($html)->toContain('Hotel Mewah')->toContain('Hotel Lain')->not->toContain('<a')->not->toContain('booking.com');
});

test('it removes scripts, event handlers and untrusted iframes but keeps youtube', function () {
    $html = LegacyHtml::clean(
        '<script>alert(1)</script><p onclick="x()">Halo</p>'
        .'<iframe src="//www.booking.com/flexiproduct.html"></iframe>'
        .'<iframe src="https://www.youtube.com/embed/abc"></iframe>',
    );

    expect($html)
        ->not->toContain('<script')
        ->not->toContain('onclick')
        ->not->toContain('booking.com')
        ->toContain('youtube.com/embed/abc');
});

test('it rewrites internal links and opens external ones safely', function () {
    $html = LegacyHtml::clean(
        '<a href="https://jalan2eropa.com/negara/belgia/atomium">A</a>'
        .'<a href="/negara/negeri-belanda/belanja">B</a>'
        .'<a href="https://example.org/">C</a>',
    );

    expect($html)
        ->toContain('href="/negara/belgia/atomium"')
        ->toContain('href="/negara/negeri-belanda#belanja"')
        ->toContain('rel="noopener noreferrer"');
});

test('it returns an empty string for empty input and builds plain excerpts', function () {
    expect(LegacyHtml::clean(null))->toBe('')
        ->and(LegacyHtml::excerpt('<p>Halo &amp; <b>dunia</b></p>'))->toBe('Halo & dunia');
});

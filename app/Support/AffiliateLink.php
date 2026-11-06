<?php

namespace App\Support;

use App\Models\Affiliate;

class AffiliateLink
{
    /**
     * Build the tracked URL for a program.
     *
     * Travelpayouts short links accept the final destination in the `u` query
     * parameter. Without a destination the plain short link (the program's
     * homepage) is returned, which is always valid and still earns commission.
     */
    public static function url(Affiliate $program, ?string $destination = null): string
    {
        if ($destination === null || $destination === '') {
            return $program->url;
        }

        return $program->url.'?u='.rawurlencode($destination);
    }

    /**
     * Fill the `{query}` placeholder of a search template.
     */
    public static function fromTemplate(?string $template, string $query): ?string
    {
        if ($template === null || $template === '' || ! str_contains($template, '{query}')) {
            return null;
        }

        return str_replace('{query}', rawurlencode($query), $template);
    }
}

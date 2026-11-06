<?php

namespace App\Console\Commands;

use App\Models\AffiliateDestination;
use App\Models\City;
use App\Support\AffiliateLink;
use Illuminate\Console\Command;

class ListAffiliateLinks extends Command
{
    /**
     * @var string
     */
    protected $signature = 'affiliates:links {--tracked : Print the tracked short link instead of the partner page}';

    /**
     * @var string
     */
    protected $description = 'List every curated affiliate destination so it can be opened and checked in a browser';

    public function handle(): int
    {
        $tracked = (bool) $this->option('tracked');

        $rows = AffiliateDestination::query()
            ->with(['affiliate', 'country'])
            ->orderBy('country_id')
            ->orderBy('kind')
            ->orderBy('sort')
            ->get()
            ->filter(fn (AffiliateDestination $row): bool => $row->destinationUrl() !== null)
            ->map(fn (AffiliateDestination $row): array => [
                $row->country?->name,
                $row->kind,
                $row->label,
                $row->affiliate?->name,
                $tracked ? AffiliateLink::url($row->affiliate, $row->destinationUrl()) : $row->destinationUrl(),
            ]);

        $this->info($rows->count().' curated destinations');
        $this->table(['Country', 'Kind', 'Label', 'Program', $tracked ? 'Tracked link' : 'Partner page'], $rows->all());

        $places = City::query()->whereNotNull('search_term')->count();
        $this->info($places.' tourist places have a search term (Klook search by name).');

        return self::SUCCESS;
    }
}

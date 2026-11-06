<?php

namespace App\Models;

use App\Support\AffiliateLink;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AffiliateDestination extends Model
{
    /**
     * @var list<string>
     */
    protected $fillable = ['affiliate_id', 'country_id', 'city_id', 'category', 'kind', 'label', 'sort', 'query', 'url'];

    /**
     * The page this row leads to: the curated URL, or the program's search template filled with `query`.
     */
    public function destinationUrl(): ?string
    {
        if ($this->url !== null && $this->url !== '') {
            return $this->url;
        }

        return $this->query ? AffiliateLink::fromTemplate($this->affiliate?->search_template, $this->query) : null;
    }

    /**
     * @return BelongsTo<Affiliate, $this>
     */
    public function affiliate(): BelongsTo
    {
        return $this->belongsTo(Affiliate::class);
    }

    /**
     * @return BelongsTo<Country, $this>
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return BelongsTo<City, $this>
     */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}

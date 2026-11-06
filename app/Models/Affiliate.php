<?php

namespace App\Models;

use Database\Factories\AffiliateFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Affiliate extends Model
{
    /** @use HasFactory<AffiliateFactory> */
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = [
        'name', 'slug', 'uid', 'url', 'logo', 'categories', 'search_template', 'hotel_search_template', 'description', 'active', 'sort',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'categories' => 'array',
            'active' => 'boolean',
            'sort' => 'integer',
        ];
    }

    /**
     * Only programs that are switched on and have a tracked short link.
     *
     * @param  Builder<Affiliate>  $query
     */
    public function scopeActive(Builder $query): void
    {
        $query->where('active', true)->where('url', '!=', '');
    }

    /**
     * Programs that serve the given category (tour, hotel, transfer, car, esim, flight, luggage, ...).
     *
     * Categories are stored as JSON text (no JSON column type, for MySQL 5 servers), so match the quoted slug.
     *
     * @param  Builder<Affiliate>  $query
     */
    public function scopeForCategory(Builder $query, string $category): void
    {
        $query->where('categories', 'like', '%'.json_encode($category).'%');
    }

    /**
     * @return HasMany<AffiliateDestination, $this>
     */
    public function destinations(): HasMany
    {
        return $this->hasMany(AffiliateDestination::class);
    }

    /**
     * Public URL of the logo if one is stored on the public disk.
     *
     * @return Attribute<string|null, never>
     */
    protected function logoUrl(): Attribute
    {
        return Attribute::get(function (): ?string {
            if ($this->logo === '' || $this->logo === null) {
                return null;
            }

            if (str_starts_with($this->logo, 'http')) {
                return $this->logo;
            }

            return file_exists(storage_path('app/public/'.$this->logo)) ? asset('storage/'.$this->logo) : null;
        });
    }
}

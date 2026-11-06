<?php

namespace App\Models;

use Database\Factories\TourFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tour extends Model
{
    /** @use HasFactory<TourFactory> */
    use HasFactory;

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'rateperperson' => 'decimal:2',
            'active' => 'boolean',
        ];
    }

    /**
     * @return HasMany<TourItem, $this>
     */
    public function items(): HasMany
    {
        return $this->hasMany(TourItem::class)->where('active', true)->orderBy('day')->orderBy('time_start');
    }

    /**
     * @return HasMany<TourRate, $this>
     */
    public function rates(): HasMany
    {
        return $this->hasMany(TourRate::class)->orderBy('min_persons');
    }

    /**
     * The cheapest per-person rate across group sizes, falling back to the base rate.
     *
     * @return Attribute<string|null, never>
     */
    protected function lowestRate(): Attribute
    {
        return Attribute::get(function (): ?string {
            $lowest = $this->rates->min('rate');

            return $lowest !== null ? (string) $lowest : $this->rateperperson;
        });
    }

    /**
     * Public URL of the tour image, if one exists on disk.
     *
     * @return Attribute<string|null, never>
     */
    protected function imageUrl(): Attribute
    {
        return Attribute::get(function (): ?string {
            $path = 'images/tours/'.str_pad((string) $this->id, 5, '0', STR_PAD_LEFT).'.jpg';

            return file_exists(storage_path('app/public/'.$path)) ? asset('storage/'.$path) : null;
        });
    }
}

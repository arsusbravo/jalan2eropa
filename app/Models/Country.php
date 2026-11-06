<?php

namespace App\Models;

use App\Support\HotelLinker;
use App\Support\LegacyHtml;
use Database\Factories\CountryFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    /** @use HasFactory<CountryFactory> */
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = ['name', 'title', 'slug', 'international', 'codes', 'latitude', 'longitude', 'keywords', 'description', 'short_desc', 'to_see', 'eatdrink', 'shopping', 'others', 'active'];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'active' => 'boolean',
        ];
    }

    /**
     * @return HasMany<City, $this>
     */
    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    /**
     * Render one of the long-form HTML columns as clean, safe HTML.
     */
    public function cleanHtml(string $attribute): string
    {
        return LegacyHtml::clean($this->getAttribute($attribute), app(HotelLinker::class)->closure());
    }

    /**
     * Public URL of the lowercase two-letter flag image.
     *
     * @return Attribute<string, never>
     */
    protected function flagUrl(): Attribute
    {
        return Attribute::get(fn (): string => asset('storage/images/flags/'.strtolower($this->codes).'.png'));
    }

    /**
     * Public URL of the country photo, if one exists on disk.
     *
     * @return Attribute<string|null, never>
     */
    protected function photoUrl(): Attribute
    {
        return Attribute::get(function (): ?string {
            $path = 'images/countries/photos/'.$this->slug.'.jpg';

            return file_exists(storage_path('app/public/'.$path)) ? asset('storage/'.$path) : null;
        });
    }
}

<?php

namespace App\Models;

use App\Support\HotelLinker;
use App\Support\LegacyHtml;
use Database\Factories\CityFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    /** @use HasFactory<CityFactory> */
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = ['country_id', 'name', 'slug', 'search_term', 'type', 'latitude', 'longitude', 'hotels', 'youtube', 'attractions', 'address', 'thumb'];

    /**
     * @return BelongsTo<Country, $this>
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * The attractions text cleaned of legacy markup and affiliate elements.
     *
     * @return Attribute<string, never>
     */
    protected function body(): Attribute
    {
        return Attribute::get(fn (): string => LegacyHtml::clean($this->attractions, app(HotelLinker::class)->closure()));
    }

    /**
     * A short plain-text teaser of the description.
     *
     * @return Attribute<string, never>
     */
    protected function excerpt(): Attribute
    {
        return Attribute::get(fn (): string => LegacyHtml::excerpt($this->attractions, 120));
    }

    /**
     * The street address as plain text.
     *
     * @return Attribute<string, never>
     */
    protected function plainAddress(): Attribute
    {
        return Attribute::get(fn (): string => html_entity_decode(strip_tags($this->address), ENT_QUOTES | ENT_HTML5));
    }

    /**
     * Airports and train stations are only listed, they have no public detail page.
     *
     * @return Attribute<bool, never>
     */
    protected function hasDetailPage(): Attribute
    {
        return Attribute::get(fn (): bool => ! in_array($this->type, ['airport', 'train station'], true));
    }

    /**
     * Human-readable Indonesian label for the place type.
     *
     * @return Attribute<string, never>
     */
    protected function typeLabel(): Attribute
    {
        return Attribute::get(fn (): string => match ($this->type) {
            'tourist' => 'Tempat wisata',
            'shopping' => 'Belanja',
            'airport' => 'Bandara',
            'train station' => 'Stasiun kereta',
            default => ucfirst($this->type),
        });
    }

    /**
     * Public URL of the thumbnail, if one exists on disk.
     *
     * @return Attribute<string|null, never>
     */
    protected function thumbUrl(): Attribute
    {
        return Attribute::get(function (): ?string {
            if ($this->thumb === '') {
                return null;
            }

            $path = 'images/article/places/'.$this->thumb;

            return file_exists(storage_path('app/public/'.$path))
                ? asset('storage/images/article/places/'.rawurlencode($this->thumb))
                : null;
        });
    }
}

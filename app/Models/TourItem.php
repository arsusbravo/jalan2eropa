<?php

namespace App\Models;

use App\Support\LegacyHtml;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TourItem extends Model
{
    /**
     * @var list<string>
     */
    protected $fillable = ['tour_id', 'country_id', 'hotel', 'place', 'day', 'description', 'time_start', 'time_end', 'active'];

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
     * The description cleaned of legacy markup, ready to render unescaped.
     *
     * @return Attribute<string, never>
     */
    protected function body(): Attribute
    {
        return Attribute::get(fn (): string => LegacyHtml::clean($this->description));
    }

    /**
     * @return BelongsTo<Tour, $this>
     */
    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class);
    }

    /**
     * @return BelongsTo<Country, $this>
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}

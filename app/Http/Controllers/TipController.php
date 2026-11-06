<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Support\AffiliateOffers;
use Illuminate\Contracts\View\View;

class TipController extends Controller
{
    /**
     * Public tip slugs mapped to their content-table slug and presentation.
     *
     * @var array<string, array{content: string, icon: string, summary: string}>
     */
    public const TIPS = [
        'visa' => ['content' => 'visa', 'icon' => 'passport', 'summary' => 'Syarat dan langkah mengurus visa ke Eropa.'],
        'transportasi' => ['content' => 'transportasi', 'icon' => 'train', 'summary' => 'Kereta, bus, dan pesawat untuk berpindah antarkota.'],
        'persiapan' => ['content' => 'persiapan', 'icon' => 'suitcase', 'summary' => 'Checklist dan hal penting sebelum berangkat.'],
        'tax-refund' => ['content' => 'tax', 'icon' => 'receipt', 'summary' => 'Cara mendapatkan kembali pajak dari belanja Anda.'],
        'info' => ['content' => 'info', 'icon' => 'sparkle', 'summary' => 'Informasi umum seputar jalan-jalan ke Eropa.'],
    ];

    /**
     * List all tips and info pages.
     */
    public function index(): View
    {
        $contents = Content::query()->whereIn('slug', array_column(self::TIPS, 'content'))->get()->keyBy('slug');

        return view('tips.index', [
            'tips' => collect(self::TIPS)
                ->filter(fn (array $tip): bool => $contents->has($tip['content']))
                ->map(fn (array $tip, string $slug): array => $tip + ['slug' => $slug, 'title' => $contents[$tip['content']]->title]),
        ]);
    }

    /**
     * Show a single tip article.
     */
    public function show(string $slug): View
    {
        abort_unless(array_key_exists($slug, self::TIPS), 404);

        $tip = self::TIPS[$slug];

        return view('tips.show', [
            'content' => Content::query()->where('slug', $tip['content'])->firstOrFail(),
            'plan' => AffiliateOffers::groups(match ($slug) {
                'transportasi' => ['flight', 'car', 'transfer'],
                'persiapan' => ['esim', 'luggage', 'claims'],
                default => [],
            }),
            'tip' => $tip,
            'slug' => $slug,
            'others' => collect(self::TIPS)->except($slug)->map(fn (array $other, string $otherSlug): array => $other + ['slug' => $otherSlug]),
            'titles' => Content::query()->whereIn('slug', array_column(self::TIPS, 'content'))->pluck('title', 'slug'),
        ]);
    }
}

<?php

namespace Database\Factories;

use App\Models\Affiliate;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Affiliate>
 */
class AffiliateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->company();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'uid' => '',
            'url' => 'https://'.Str::slug($name).'.tpk.ro/'.Str::random(8),
            'logo' => '',
            'categories' => ['tour'],
            'search_template' => null,
            'description' => fake()->sentence(),
            'active' => true,
            'sort' => 100,
        ];
    }

    /**
     * A program that is switched off.
     */
    public function inactive(): static
    {
        return $this->state(fn (): array => ['active' => false]);
    }
}

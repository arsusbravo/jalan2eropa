<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->country();

        return [
            'name' => $name,
            'title' => 'Kota-kota wisata di '.$name,
            'slug' => Str::slug($name),
            'international' => $name,
            'codes' => fake()->unique()->lexify('??'),
            'latitude' => (string) fake()->latitude(),
            'longitude' => (string) fake()->longitude(),
            'keywords' => '',
            'description' => fake()->paragraph(),
            'short_desc' => fake()->sentence(),
            'to_see' => '',
            'eatdrink' => '',
            'shopping' => '',
            'others' => '',
            'views' => 0,
            'active' => true,
        ];
    }
}

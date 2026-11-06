<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->city();

        return [
            'country_id' => Country::factory(),
            'name' => $name,
            'slug' => Str::slug($name),
            'hotels' => '',
            'latitude' => (string) fake()->latitude(),
            'longitude' => (string) fake()->longitude(),
            'attractions' => '',
            'type' => 'tourist',
            'youtube' => '',
            'thumb' => '',
            'address' => fake()->address(),
        ];
    }
}

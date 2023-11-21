<?php

namespace Database\Factories;

use App\Models\Cat;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatFactory extends Factory
{
    protected $model = Cat::class;

    public function definition()
    {
        return [
            'weight_imperial' => $this->faker->randomNumber(2) . ' lbs',
            'weight_metric' => $this->faker->randomNumber(2) . ' kg',
            'id' => $this->faker->unique()->word,
            'name' => $this->faker->name,
            'cfa_url' => $this->faker->url,
            'vetstreet_url' => $this->faker->url,
            'vcahospitals_url' => $this->faker->url,
            'temperament' => $this->faker->text,
            'origin' => $this->faker->word,
            'country_codes' => $this->faker->countryCode,
            'country_code' => $this->faker->countryCode,
            'description' => $this->faker->paragraph,
            'life_span' => $this->faker->randomNumber(1) . '-' . $this->faker->randomNumber(2) . ' years',
            'indoor' => $this->faker->randomElement(['0', '1']),
            'lap' => $this->faker->randomElement(['0', '1']),
            'alt_names' => $this->faker->words(3, true),
            'adaptability' => $this->faker->numberBetween(0, 5),
            'affection_level' => $this->faker->numberBetween(0, 5),
            'child_friendly' => $this->faker->numberBetween(0, 5),
            'dog_friendly' => $this->faker->numberBetween(0, 5),
            'energy_level' => $this->faker->numberBetween(0, 5),
            'grooming' => $this->faker->numberBetween(0, 5),
            'health_issues' => $this->faker->numberBetween(0, 5),
            'intelligence' => $this->faker->numberBetween(0, 5),
            'shedding_level' => $this->faker->numberBetween(0, 5),
            'social_needs' => $this->faker->numberBetween(0, 5),
            'stranger_friendly' => $this->faker->numberBetween(0, 5),
            'vocalisation' => $this->faker->word,
            'experimental' => $this->faker->randomElement(['0', '1']),
            'hairless' => $this->faker->randomElement(['0', '1']),
            'natural' => $this->faker->randomElement(['0', '1']),
            'rare' => $this->faker->randomElement(['0', '1']),
            'rex' => $this->faker->randomElement(['0', '1']),
            'suppressed_tail' => $this->faker->randomElement(['0', '1']),
            'short_legs' => $this->faker->randomElement(['0', '1']),
            'wikipedia_url' => $this->faker->url,
            'hypoallergenic' => $this->faker->randomElement(['0', '1']),
            'reference_image_id' => $this->faker->unique()->word,
            'image_id' => $this->faker->word,
            'image_width' => $this->faker->numberBetween(100, 1000),
            'image_height' => $this->faker->numberBetween(100, 1000),
            'imageUrl' => $this->faker->imageUrl(),
            'searches' => $this->faker->numberBetween(0, 100),
        ];
    }
}
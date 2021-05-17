<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;


    private function randomStringArray()
    {
        return [$this->faker->sentence, $this->faker->sentence, $this->faker->sentence];
    }


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'name_ar' => $this->faker->word,
            'description' => $this->faker->text,
            'description_ar' => $this->faker->text,
            'points' => $this->randomStringArray(),
            'points_ar' => $this->randomStringArray(),
            'price' => $this->faker->numberBetween(0, 1000),
            'additional_images' => [$this->faker->imageUrl(), $this->faker->imageUrl(), $this->faker->imageUrl()]
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory {
    /**
    * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
    *
    * @return array
    */

    public function definition() {
        return [
            'name' => $this->faker->word,
            'name_ar' => $this->faker->word,
            'job' => $this->faker->word,
            'job_ar' => $this->faker->word,
            'biography' => $this->faker->text,
            'biography_ar' => $this->faker->text,
            'facebook' => $this->faker->url,
            'linkedin' => $this->faker->url,
            'image_url' => $this->faker->imageUrl()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentences(2, true),
            'short_description' => $this->faker->realText(),
            'description' => $this->faker->realText(1500),
            'url_img' => 'https://picsum.photos/600/300'
        ];
    }
}

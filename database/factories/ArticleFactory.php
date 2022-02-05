<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article_id' => $this->faker->unique()->md5(),
            'title' => $this->faker->sentence,
            'summary' => $this->faker->sentence,
            'content' => $this->faker->text(1000),
            'author_id' => $this->faker->randomElement(User::pluck('id')->toArray()),
        ];
    }
}

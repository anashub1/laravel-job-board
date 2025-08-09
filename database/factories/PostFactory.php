<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $modeel = Post::class;
    /**
     
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid()->toString(),
            'title'=>$this->faker->sentence,
            'body'=>$this->faker->paragraph(3,true),
            'author'=>$this->faker->name,
            'published'=>$this->faker->boolean
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Str;


class CommentFactory extends Factory
{
   
    protected $modeel = Comment::class;
    /**
     
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' =>Post::factory() ,
            'content'=>$this->faker->sentence,
            'author'=>$this->faker->name,
        ];
    }
}

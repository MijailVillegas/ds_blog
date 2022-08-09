<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{    
    protected $model =Image::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'url' => 'posts/' . $this->faker->image('public/storage/posts', 640, 480, null, false), //devuelve posts/img.jpg
            /* 'url' => 'posts/' . $this->faker->image('public/storage/posts', 640, 480, 'animals', false), */
            /* 'url' => 'https://picsum.photos/640/480' */
        ];
    }
}

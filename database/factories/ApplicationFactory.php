<?php

namespace Database\Factories;

use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Application::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $rand = Str::random(10);
        return [
            'title' => $rand,
            'short_description' => 'A short description',//$this->faker->unique()->safeEmail,
            'body' => Str::random(50),
            'route' => $rand,
        ];
    }
}

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
        $a = $this->faker->unique()->word(2);
        return [
            'title' => $a,
            'short_description' => $this->faker->word(7),
            'body' => $this->faker->paragraph(4),
            'route' => $a,
        ];
    }
}

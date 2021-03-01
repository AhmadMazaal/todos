<?php

namespace Database\Factories;

use App\Models\Tests;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tests::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}

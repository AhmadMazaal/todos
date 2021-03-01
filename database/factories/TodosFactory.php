<?php

namespace Database\Factories;

use App\Models\Todos;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Todos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(4),
            'isCompleted' => false
        ];
    }
}

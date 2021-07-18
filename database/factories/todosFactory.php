<?php

namespace Database\Factories;

use App\Models\todo;
use Illuminate\Database\Eloquent\Factories\Factory;
class todosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = todo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(3),
            'desc' => $this->faker->text(100),
            'status' => false
               ];
    }
}

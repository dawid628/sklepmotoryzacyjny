<?php

namespace Database\Factories;

use App\Models\Bodywork;
use Illuminate\Database\Eloquent\Factories\Factory;

class BodyworkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bodywork::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}

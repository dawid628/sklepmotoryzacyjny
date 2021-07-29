<?php

namespace Database\Factories;

use App\Models\Engine;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EngineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Engine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'liters' => rand(1,5),
            'petrol' => Str::random(10),
        ];
    }
}

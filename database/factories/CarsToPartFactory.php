<?php

namespace Database\Factories;

use App\Models\CarsToPart;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarsToPartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CarsToPart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
            'car_id' => rand(1,10),
            'part_id' => rand(1,10),
=======
            'car_id' => rand(1,100),
            'part_id' => rand(1,100),
>>>>>>> master
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\EnginesToCar;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnginesToCarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EnginesToCar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
            'engine_id' => rand(1,10),
            'car_id' => rand(1,10),
=======
            'engine_id' => rand(1,100),
            'car_id' => rand(1,100),
>>>>>>> master
        ];
    }
}

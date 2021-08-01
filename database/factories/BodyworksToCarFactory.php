<?php

namespace Database\Factories;

use App\Models\BodyworksToCar;
use Illuminate\Database\Eloquent\Factories\Factory;

class BodyworksToCarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BodyworksToCar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
            'bodywork_id' => rand(1,10),
            'car_id' => rand(1,10),
=======
            'bodywork_id' => rand(1,100),
            'car_id' => rand(1,100),
>>>>>>> master
        ];
    }
}

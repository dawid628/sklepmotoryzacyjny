<?php

namespace Database\Factories;

use App\Models\EnginesToPart;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnginesToPartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EnginesToPart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
            'part_id' => rand(1,10),
            'engine_id' =>rand(1,10),
=======
            'part_id' => rand(1,100),
            'engine_id' =>rand(1,100),
>>>>>>> master
        ];
    }
}

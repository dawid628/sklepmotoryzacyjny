<?php

namespace Database\Factories;

use App\Models\BodyworksToPart;
use Illuminate\Database\Eloquent\Factories\Factory;

class BodyworksToPartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BodyworksToPart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'part_id' => rand(1,100),
            'bodywork_id' => rand(1,100),
        ];
    }
}

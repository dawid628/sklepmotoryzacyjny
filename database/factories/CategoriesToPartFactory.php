<?php

namespace Database\Factories;

use App\Models\CategoriesToPart;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriesToPartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoriesToPart::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
            'category_id' => rand(1,10),
            'part_id' => rand(1,10),
=======
            'category_id' => rand(1,100),
            'part_id' => rand(1,100),
>>>>>>> master
        ];
    }
}

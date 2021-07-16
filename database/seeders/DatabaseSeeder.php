<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
         \App\Models\Bodywork::factory(10)->create();
         \App\Models\Car::factory(10)->create();
         \App\Models\BodyworksToCar::factory(10)->create();
         \App\Models\Engine::factory(10)->create();
         \App\Models\EnginesToCar::factory(10)->create();
         \App\Models\Category::factory(10)->create();
         \App\Models\Part::factory(10)->create();
         \App\Models\EnginesToPart::factory(10)->create();
         \App\Models\BodyworksToPart::factory(10)->create();
         \App\Models\CarsToPart::factory(10)->create();
         \App\Models\CategoriesToPart::factory(10)->create();
    }
}

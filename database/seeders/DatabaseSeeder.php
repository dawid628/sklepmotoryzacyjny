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
         \App\Models\User::factory(100)->create();
         \App\Models\Bodywork::factory(100)->create();
         \App\Models\Car::factory(100)->create();
         \App\Models\BodyworksToCar::factory(100)->create();
         \App\Models\Engine::factory(100)->create();
         \App\Models\EnginesToCar::factory(100)->create();
         \App\Models\Category::factory(100)->create();
         \App\Models\Part::factory(100)->create();
         \App\Models\EnginesToPart::factory(100)->create();
         \App\Models\BodyworksToPart::factory(100)->create();
         \App\Models\CarsToPart::factory(100)->create();
         \App\Models\CategoriesToPart::factory(100)->create();
    }
}

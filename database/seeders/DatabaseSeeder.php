<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleToUser;
use App\Models\User;
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

        $role = new Role();
        $role->name = 'admin';
        $role->save();
        $role = new Role();
        $role->name = 'moderator';
        $role->save();
        $role = new Role();
        $role->name = 'user';
        $role->save();

         $count = User::all('id');
        foreach($count as $item)
        {
            $ru = new RoleToUser();
            $ru->user_id = $item->id;
            $ru->role_id = '3';
            $ru->save();
        }
        
        
    }
}

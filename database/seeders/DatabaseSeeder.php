<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\RoleToUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(10)->create();
        //  \App\Models\Bodywork::factory(10)->create();
        //  \App\Models\Car::factory(10)->create();
        //  \App\Models\BodyworksToCar::factory(10)->create();
        //  \App\Models\Engine::factory(10)->create();
        //  \App\Models\EnginesToCar::factory(10)->create();
        //  \App\Models\Category::factory(10)->create();
        //  \App\Models\Part::factory(10)->create();
        //  \App\Models\EnginesToPart::factory(10)->create();
        //  \App\Models\BodyworksToPart::factory(10)->create();
        //  \App\Models\CarsToPart::factory(10)->create();
        //  \App\Models\CategoriesToPart::factory(10)->create();

        // $role = new Role();
        // $role->name = 'admin';
        // $role->save();
        // $role = new Role();
        // $role->name = 'moderator';
        // $role->save();
        // $role = new Role();
        // $role->name = 'user';
        // $role->save();

        //  $count = User::all('id');
        // foreach($count as $item)
        // {
        //     $ru = new RoleToUser();
        //     $ru->user_id = $item->id;
        //     $ru->role_id = '3';
        //     $ru->save();
        // }
        
        //     //admin account
        // $user = new User();
        // $user->name = 'Dawid';
        // $user->email = 'dawid628@onet.eu';
        // $user->password = Hash::make('dawid123');
        // $user->save();
        
        // $role = new RoleToUser();
        // $role->user_id = $user->id;
        // $role->role_id = '1';
        // $role->save();

           //user account
        // $user = new User();
        // $user->name = 'Dawid';
        // $user->email = 'user@user.user';
        // $user->password = Hash::make('useruser');
        // $user->save();
        
        // $role = new RoleToUser();
        // $role->user_id = $user->id;
        // $role->role_id = '3';
        // $role->save();
        
        
    }
}

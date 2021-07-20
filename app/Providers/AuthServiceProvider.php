<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Models\Part' => 'App\Policies\PartPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // $gate->define('isAdmin', function($user){
        //     return User::find($user->id)->where('roles.name', 'admin');
        // });

        // $gate->define('isModerator', function($user){
        //     return User::find($user->id)->where('roles.name', 'moderator');
        // });
    }
}

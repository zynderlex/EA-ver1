<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
//use Illuminate\Contracts\Auth\Access\Gate as GateContact;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()//GateContact $gate
    {
        $this->registerPolicies();
      /*  $gate->define('admin-acces', function($user){
          return $user->role == 'admin';
        });
        $gate->define('member-acces', function($user){
          return $user->role == 'NULL';
        });*/
    }
}

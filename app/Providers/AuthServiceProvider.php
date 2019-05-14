<?php

namespace App\Providers;

// use Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();

        $gate->define('isAdmin', function($user){
            return $user->user_type == 'admin';
        });
        
        $gate->define('isHireling', function($user){
            return $user->user_type == 'hireling';
        });

        $gate->define('isHirer', function($user){
            return $user->user_type == 'hirer';
        });
    }
}

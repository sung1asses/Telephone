<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function ($user) {
            if($user->hasRole('admin'))
            {
                return true;
            }
            return false;
        });

        Gate::define('redactor', function ($user) {
            if($user->hasRole('redactor') || $user->hasRole('admin'))
            {
                return true;
            }
            return false;
        });
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('isAdmin', function ($user){
            return $user->userLevel == 0;
        });
        Gate::define('isALecturer', function ($user){
            return $user->userLevel == 3;
        });
        Gate::define('isStudent', function ($user){
            return $user->userLevel == 5;
        });
    }
}

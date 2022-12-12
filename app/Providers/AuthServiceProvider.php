<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('users_create', function (User $user) {
            return $user->role_id === \App\Models\Role::ADMIN;
        });
        Gate::define('users_edit', function (User $user) {
            return $user->role_id === \App\Models\Role::ADMIN;
        });
        Gate::define('users_destory', function (User $user) {
            return $user->role_id === \App\Models\Role::ADMIN;
        });
    }
}

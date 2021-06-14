<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\Subs;
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
        User::class => Subs::class

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('subs_only', function($user) {
            if ($user->subs == 1) {
                return true;
            }
    
            return false;
        });
    }
}

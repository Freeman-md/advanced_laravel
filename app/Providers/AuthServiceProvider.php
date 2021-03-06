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

        Gate::define('subs_only', [Subs::class, 'subs_only']);

         Gate::resource('posts', 'App\Policies\PostPolicy', [
             'posts.photo' => 'updatePhoto',
             'posts.image' => 'updateImage',
         ]);
    }
}

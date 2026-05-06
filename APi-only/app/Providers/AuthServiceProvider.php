<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     */
    protected $policies = [
        // Example:
        // 'App\Models\Product' => 'App\Policies\ProductPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Register policies
        $this->registerPolicies();

        // Passport routes (OAuth2 endpoints)

        /**
         * 🔐 Token Security Settings
         */

        // Access Token Expiration (short = more secure)
        Passport::tokensExpireIn(now()->addMinutes(15));

        // Refresh Token Expiration
        Passport::refreshTokensExpireIn(now()->addDays(7));

        // Personal Access Token Expiration
        Passport::personalAccessTokensExpireIn(now()->addMonths(1));

        /**
         * 🔑 Optional: Scopes (permissions for tokens)
         */
        Passport::tokensCan([
            'admin' => 'Admin access',
            'user' => 'User access',
        ]);

        // Default scope
        Passport::setDefaultScope([
            'user',
        ]);
    }
}
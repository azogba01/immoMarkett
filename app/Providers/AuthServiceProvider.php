<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
// use Illuminate\Support\Facades\Gate;
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
        $this->registerPolicies();

        Gate::define('bailleur', function ($user) {
            return $user->role === 'bailleur'; // Assurez-vous que le champ 'role' existe dans votre modèle User
        });

        // Gate::define('bailleur', function (User $user) {
        //     return $user->role === 'bailleur';
        // });
        Gate::define('admin', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('viewAdminPage', function ($user) {
            return $user->role === 'admin';  
        });

        Gate::define('viewBailleurPage', function ($user) {
            return $user->role === 'bailleur';  
        });
    }
}

<?php

namespace App\Providers;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        if (!app()->runningInConsole()) {
            foreach ($this->getPermissions() as $permission) {
                Gate::define($permission->name, function (User $user) use ($permission) {
                    return $user->hasPermissionTo($permission);
                });
            }

            foreach ($this->getRoles() as $role) {
                Gate::define($role->name, function (User $user) use ($role) {
                    return $user->hasRole($role);
                });
            }
        }
    }

    /**
     * Fetch the collection of site permissions.
     *
     * @return Collection
     */
    protected function getPermissions(): Collection
    {
        return Permission::with('roles')->get();
    }

    /**
     * Fetch the collection of site roles.
     *
     * @return Collection
     */
    protected function getRoles(): Collection
    {
        return Role::all();
    }
}

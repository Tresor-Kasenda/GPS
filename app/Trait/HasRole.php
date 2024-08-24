<?php

declare(strict_types=1);

namespace App\Trait;

use Illuminate\Database\Eloquent\Model;

trait HasRole
{
    /**
     * @param $permission
     * @return mixed
     */
    public function hasPermissionTo(Model $permission): mixed
    {
        return $this
            ->roles
            ->flatMap
            ->permissions
            ->contains('name', $permission->name);
    }

    /**
     * @param $role
     * @return mixed
     */
    public function hasRole($role): mixed
    {
        return $this->roles->contains('name', $role->name);
    }
}

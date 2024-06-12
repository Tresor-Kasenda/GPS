<?php

declare(strict_types=1);

namespace App\Trait;

trait HasRole
{
    /**
     * @param $permission
     * @return mixed
     */
    public function hasPermissionTo($permission): mixed
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

<?php

namespace App\Repositories\Eloquent;

use App\Role;
use App\Repositories\RepositoryAbstract;
use App\Repositories\Contracts\RoleRepository;

class EloquentRoleRepository extends RepositoryAbstract implements RoleRepository
{
    /**
     * @return string
     */
    public function entity()
    {
        return Role::class;
    }
}
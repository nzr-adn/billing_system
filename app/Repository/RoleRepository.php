<?php

namespace App\Repository;

use App\Models\Role;

class RoleRepository extends BaseRepository
{
    protected $model;

    public function __construct(Role $model)
    {
        parent::__construct($model);
    }
}

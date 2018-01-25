<?php

namespace Modules\RolePermission\Http\OsFrame;

use Spatie\Permission\Models\Role;

class OsFrameRole
{
    public $roleName;

    public function createRole()
    {
        $role = Role::create(['name' => $this->roleName]);

        if($role) {
            return $role;
        } else {
            return false;
        }
    }
}
<?php

namespace Modules\RolePermission\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\RolePermission\Http\OsFrame\OsFrameRole;

class RolePermissionController extends Controller
{
    public function createRole()
    {
        $osFrameRole = new OsFrameRole();
        $osFrameRole->roleName = 'Super Admin';
        $res = $osFrameRole->createRole();

        var_dump($res);
    }
}

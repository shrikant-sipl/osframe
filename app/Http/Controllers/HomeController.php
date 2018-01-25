<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\RolePermission\Http\OsFrame\OsFrameRole;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function createRole()
    {
        $osFrameRole = new OsFrameRole();
        $osFrameRole->roleName = "Admin";
        $res = $osFrameRole->createRole();
        var_dump($res);
    }
}

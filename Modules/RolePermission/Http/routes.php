<?php

Route::group(['middleware' => 'web', 'prefix' => 'rolepermission', 'namespace' => 'Modules\RolePermission\Http\Controllers'], function()
{
    Route::get('/', 'RolePermissionController@index');

    Route::get('create-role', 'RolePermissionController@createRole');
});

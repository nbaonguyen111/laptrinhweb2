<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function role(Request $request) {
        $role_id = $request->get('id');
        $role = Role::find($role_id);

       $data = [
           'role' => $role,
           'users' => $role->users
       ];

        return view('role.read', $data);
    }
}

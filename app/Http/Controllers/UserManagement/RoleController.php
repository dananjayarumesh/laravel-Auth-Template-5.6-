<?php

namespace App\Http\Controllers\UserManagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    public function list()
    {

        $roles = Role::all();

        return view('user-management.roles.list')->with(['roles'=>$roles]);
    }


    public function add()
    {
        return view('user-management.roles.add');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:20|unique:roles,name'
        ]);

        $role = Role::create(['name' => $request->name]);

        return redirect()->route('role.add');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

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

        return redirect()->route('role.list');
    }

    public function edit($id)
    {
        $role = Role::find($id);

        return view('user-management.roles.edit')->with(['role'=>$role]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:20|unique:roles,name'
        ]);

        Role::where('id',$id)->update([
            'name'=> $request->name
        ]);

        return redirect()->route('role.list');
    }


    public function destroy($id)
    {
        $permission = Role::where('id',$id)->delete();
        return redirect()->route('role.list');
    }
}

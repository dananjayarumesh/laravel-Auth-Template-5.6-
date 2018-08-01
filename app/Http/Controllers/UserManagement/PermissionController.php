<?php

namespace App\Http\Controllers\UserManagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{

    public function list()
    {
        $permissions = Permission::all();

        return view('user-management.permissions.list')->with(['permissions'=>$permissions]);
    }

    public function add()
    {
        return view('user-management.permissions.add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:20|unique:permissions,name'
        ]);

        $permission = Permission::create(['name' => $request->name]);

        return redirect()->route('permission.add');
    }

    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('user-management.permissions.edit')->with('permission',$permission);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:20|unique:permissions,name'
        ]);

        Permission::where('id',$id)->update([
            'name'=> $request->name
        ]);

        return redirect()->route('permission.list');

    }

    public function destroy($id)
    {
        $permission = Permission::where('id',$id)->delete();
        return redirect()->route('permission.list');
    }
}

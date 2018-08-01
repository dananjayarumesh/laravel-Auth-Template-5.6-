<?php

namespace App\Http\Controllers\UserManagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\user;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{

    public function list()
    {
        $users = User::with('roles')->get();

        return view('user-management.users.list')->with(['users'=>$users]);
    }

    public function add()
    {

        $roles = Role::all();

        return view('user-management.users.add')->with(['roles'=>$roles]);
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|string|max:20'
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        $user->assignRole($request->role);

        return redirect()->route('user.add');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::with('roles')->where('id',$id)->first();
// dd($user->roles);
        $roles = Role::all();

        return view('user-management.users.edit')->with(['user'=>$user,'roles'=>$roles]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        dd($id);
    }
}

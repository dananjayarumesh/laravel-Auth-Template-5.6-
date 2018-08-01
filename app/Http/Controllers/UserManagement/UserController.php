<?php

namespace App\Http\Controllers\UserManagement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        'password'=>$request->password,
    ]);

       $user->assignRole($request->role);

       return redirect()->route('user.add');


   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

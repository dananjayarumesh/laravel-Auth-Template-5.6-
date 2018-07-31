<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

	Route::get('/', 'HomeController@index')->name('dashboard');

});




//User-Management
Route::group(['middleware' => ['auth']], function () {

	Route::group(['prefix' => 'permission'], function () {
		Route::get('/list', 'UserManagement\PermissionController@list')->name('permission.list');
		Route::get('/add', 'UserManagement\PermissionController@add')->name('permission.add');
	});

	Route::group(['prefix' => 'role'], function () {
		Route::get('/list', 'UserManagement\RoleController@list')->name('role.list');
		Route::get('/add', 'UserManagement\RoleController@add')->name('role.add');
	});

	Route::group(['prefix' => 'user'], function () {
		Route::get('/list', 'UserManagement\UserController@list')->name('user.list');
		Route::get('/add', 'UserManagement\UserController@add')->name('user.add');
	});

});

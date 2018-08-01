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
		Route::get('/edit/{id}', 'UserManagement\PermissionController@edit')->name('permission.edit');

		Route::post('/add', 'UserManagement\PermissionController@store')->name('permission.store');
		Route::post('/edit/{id}', 'UserManagement\PermissionController@update')->name('permission.update');

		Route::delete('/delete/{id}', 'UserManagement\PermissionController@destroy')->name('permission.delete');
	});

	Route::group(['prefix' => 'role'], function () {

		Route::get('/list', 'UserManagement\RoleController@list')->name('role.list');
		Route::get('/add', 'UserManagement\RoleController@add')->name('role.add');
		Route::get('/edit/{id}', 'UserManagement\RoleController@edit')->name('role.edit');

		Route::post('/add', 'UserManagement\RoleController@store')->name('role.store');
		Route::post('/edit/{id}', 'UserManagement\RoleController@update')->name('role.update');
		Route::delete('/delete/{id}', 'UserManagement\RoleController@destroy')->name('role.delete');
	});

	Route::group(['prefix' => 'user'], function () {

		Route::get('/list', 'UserManagement\UserController@list')->name('user.list');
		Route::get('/add', 'UserManagement\UserController@add')->name('user.add');
		Route::get('/edit/{id}', 'UserManagement\UserController@edit')->name('user.edit');

		Route::post('/add', 'UserManagement\UserController@store')->name('user.store');
		Route::post('/edit/{id}', 'UserManagement\UserController@update')->name('user.update');
		Route::delete('/delete/{id}', 'UserManagement\UserController@destroy')->name('user.delete');
	});

});

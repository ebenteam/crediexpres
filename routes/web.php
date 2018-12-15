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

Route::get('/home', 'HomeController@index')->name('home');

//Rutas

Route::middleware(['auth'])->group(function() {

    //Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');


    //Clientes
    Route::post('clientes/store', 'ClientesController@store')->name('clientes.store')
        ->middleware('permission:clientes.create');

    Route::get('clientes', 'ClientesController@index')->name('clientes.index')
    ->middleware('permission:clientes.index');

    Route::get('clientes/create', 'ClientesController@create')->name('clientes.create')
    ->middleware('permission:clientes.create');

    Route::put('clientes/{clientes}', 'ClientesController@update')->name('clientes.update')
    ->middleware('permission:clientes.edit');

    Route::get('clientes/{clientes}', 'ClientesController@show')->name('clientes.show')
    ->middleware('permission:clientes.show');

    Route::delete('clientes/{clientes}', 'ClientesController@destroy')->name('clientes.destroy')
    ->middleware('permission:clientes.destroy');

    Route::get('clientes/{clientes}/edit', 'ClientesController@edit')->name('clientes.edit')
    ->middleware('permission:clientes.edit');


    //Users
    Route::get('users', 'UserController@index')->name('users.index')
    ->middleware('permission:users.index');

    Route::put('users/{role}', 'UserController@update')->name('users.update')
    ->middleware('permission:users.edit');

    Route::get('users/{role}', 'UserController@show')->name('users.show')
    ->middleware('permission:users.show');

    Route::delete('users/{role}', 'UserController@destroy')->name('users.destroy')
    ->middleware('permission:users.destroy');

    Route::get('users/{role}/edit', 'UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');
   




});

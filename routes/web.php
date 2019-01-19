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

Route::get('/', function () {return view('welcome');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas

Route::middleware(['auth'])->group(function() {


    //Rutas Menu Izquierdo

    //Clientes

    Route::get('clientes/modificar', 'ClientesController@modificar')->name('clientes.modificar')
    ->middleware('permission:clientes.modificar');

    Route::get('clientes/eliminar', 'ClientesController@eliminar')->name('clientes.eliminar')
    ->middleware('permission:clientes.eliminar');

    Route::get('clientes/ver', 'ClientesController@ver')->name('clientes.ver')
    ->middleware('permission:clientes.ver');

     //Cliente Credito

     Route::get('creditos/crear', 'CreditosController@crear')->name('creditos.crear')
     ->middleware('permission:creditos.crear');

     Route::get('creditos/modificar', 'CreditosController@modificar')->name('creditos.modificar')
     ->middleware('permission:creditos.modificar');

     Route::get('creditos/eliminar', 'CreditosController@eliminar')->name('creditos.eliminar')
     ->middleware('permission:creditos.eliminar');

    


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

    Route::delete('roles/{roles}', 'RoleController@destroy')->name('roles.destroy')
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

    Route::put('users/{users}', 'UserController@update')->name('users.update')
    ->middleware('permission:users.edit');

    Route::get('users/{users}', 'UserController@show')->name('users.show')
    ->middleware('permission:users.show');

    Route::delete('users/{users}', 'UserController@destroy')->name('users.destroy')
    ->middleware('permission:users.destroy');

    Route::get('users/{users}/edit', 'UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');




    //Creditos

    Route::post('creditos/store', 'CreditosController@store')->name('creditos.store')
        ->middleware('permission:creditos.create');

    Route::get('creditos', 'CreditosController@index')->name('creditos.index')
    ->middleware('permission:creditos.index');

    Route::get('creditos/create/{id}', 'CreditosController@create')->name('creditos.create')
    ->middleware('permission:creditos.create');

    Route::put('creditos/{creditos}', 'CreditosController@update')->name('creditos.update')
    ->middleware('permission:creditos.edit');

    Route::get('creditos/{creditos}', 'CreditosController@show')->name('creditos.show')
    ->middleware('permission:creditos.show');

    Route::delete('creditos/{creditos}', 'CreditosController@destroy')->name('creditos.destroy')
    ->middleware('permission:creditos.destroy');

    Route::get('creditos/{creditos}/edit', 'CreditosController@edit')->name('creditos.edit')
    ->middleware('permission:creditos.edit');


    //Abonos

    Route::post('abonos/store', 'AbonosController@store')->name('abonos.store')
        ->middleware('permission:abonos.create');

    Route::get('abonos/{id}', 'AbonosController@index')->name('abonos.index')
    ->middleware('permission:abonos.index');

    Route::get('abonos/create/{id}', 'AbonosController@create')->name('abonos.create')
    ->middleware('permission:abonos.create');

    Route::put('abonos/{abonos}', 'AbonosController@update')->name('abonos.update')
    ->middleware('permission:abonos.edit');

    Route::get('abonos/show/{abonos}', 'AbonosController@show')->name('abonos.show')
    ->middleware('permission:abonos.show');

    Route::delete('abonos/{abonos}', 'AbonosController@destroy')->name('abonos.destroy')
    ->middleware('permission:abonos.destroy');

    Route::get('abonos/{abonos}/edit', 'AbonosController@edit')->name('abonos.edit')
    ->middleware('permission:abonos.edit');


    //Administracion

    Route::get('administracion/cuadredia', 'AdministracionController@cuadredia')->name('administracion.cuadredia')
        ->middleware('permission:administracion.cuadredia');

    Route::get('administracion/cuentatotal', 'AdministracionController@cuentatotal')->name('administracion.cuentatotal')
        ->middleware('permission:administracion.cuentatotal');

    Route::get('administracion/gastos', 'AdministracionController@gastos')->name('administracion.gastos')
        ->middleware('permission:administracion.gastos');

    Route::get('administracion/listacobros', 'AdministracionController@listacobros')->name('administracion.listacobros')
        ->middleware('permission:administracion.listacobros');





        


    






});

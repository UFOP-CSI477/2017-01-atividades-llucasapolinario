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

Route::get('/relatorio', function () {
    return view('vendor.adminlte.relatorios.index');
});

Route::resource('/home', 'TestsController');

Route::resource('/procedures', 'ProceduresController');

Route::resource('/pacientes', 'UsersController');

Route::resource('/tests', 'TestsController');

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

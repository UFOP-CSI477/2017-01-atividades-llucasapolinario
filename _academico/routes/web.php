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
use App\Aluno;
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/alunos', function(){
//   // $aluno = DB::table('alunos')->get();
//   $aluno = Aluno::all();
//   return $aluno;
// });

  Route::get('/alunos', 'AlunosConstroler@index');

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunosConstroler extends Controller
{
    public function index(){
        $aluno = Aluno::orderBy('nome')->get();
        // return ($aluno);
        // dd($aluno); debug
        return view('alunos.index')->with('alunos', $aluno);
    }
}

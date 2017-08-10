<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = User::where('type', '=', 3)->get();
        return view('vendor.adminlte.pacientes.index')->with('users', $paciente);
    }

}

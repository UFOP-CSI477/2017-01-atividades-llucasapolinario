<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedorController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $f = Fornecedor::all();
      return view ('fornecedores.index')->with('fornecedores', $f);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view ('fornecedores.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      Fornecedor::create($request->all());
      return redirect('/fornecedores');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Fornecedor $fornecedore)
  {
      return view('fornecedores.show')->with('fornecedore', $fornecedore);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Fornecedor $fornecedore)
  {
      return view('fornecedores.edit')->with('fornecedore', $fornecedore);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Fornecedor $fornecedore)
  {
      $fornecedore->nome = $request->nome;
      $fornecedore->nomeFantasia = $request->nomeFantasia;
      $fornecedore->telefone = $request->telefone;
      $fornecedore->save();
      return redirect('fornecedores');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Fornecedor $fornecedore)
  {
      $fornecedore->delete();
      return redirect('/fornecedores');
  }
}

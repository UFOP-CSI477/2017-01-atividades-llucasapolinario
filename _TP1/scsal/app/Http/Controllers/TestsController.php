<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Procedure;

class TestsController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = Test::orderBy('date', 'DESC')->get();
        return view('vendor.adminlte.tests.index')->with('tests', $test);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $procedures = Procedure::orderBy('name')->get();
        return view('vendor.adminlte.tests.create')->with('procedures', $procedures);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Test::create( $request->all() );
        return redirect('/tests');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
      $test->delete();
      return redirect('/tests');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //dd($id);
        //$produto = Produto::find($id);
        return view('vendor.adminlte.tests.edit')->with('test', $test);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
      $test->user_id = $request->user_id;
      $test->date = $request->date;
      $test->procedure_id = $request->procedure_id;
      $test->save();
      return redirect('/tests');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Testdb;
use Illuminate\Http\Request;

class TestdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
      $test = Testdb::all();
      foreach($test as $i){
        echo $i->name . '<br/>';
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$name,$job)
    {
        //
        $test = new Testdb;
        $test->name = $name;
        $test->job = $job;
        $test->save();
        return redirect('/testdb');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testdb  $testdb
     * @return \Illuminate\Http\Response
     */
    public function show(Testdb $testdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testdb  $testdb
     * @return \Illuminate\Http\Response
     */
    public function edit(Testdb $testdb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testdb  $testdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testdb $testdb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testdb  $testdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testdb $testdb)
    {
        //
    }
}

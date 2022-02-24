<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('todo.index',array('todo'=> Todo::all() ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
      $valid = $req->validate([
        'topic'=>'required|min:1',
        'desc'=>'required',
      ]);
      $todo = new Todo;
      $todo->topic = $req->topic;
      $todo->description = $req->desc;
      $todo->save();
      return redirect('todo');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo,$id)
    {
      return view('todo.edit',array(
        'todo'=>Todo::find($id)
      ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo,$id)
    {
      $valid = $request->validate([
        'topic'=>'required|min:1',
        'desc'=>'required',
      ]);
      $todo = Todo::find($id);
      $todo->topic = $request->topic;
      $todo->description = $request->desc;
      $todo->save();
      return redirect('todo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo,$id)
    {
      Todo::findOrFail($id)->delete();
      return redirect('todo');
    }
}

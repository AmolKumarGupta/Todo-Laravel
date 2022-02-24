<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
  function index(){
    return view('welcome');
  }
  function data($id=''){
    return view('data',array('id'=>$id));
  }
}

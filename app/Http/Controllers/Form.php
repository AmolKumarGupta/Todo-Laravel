<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    //
  public function index(Request $r){
   return $r->post('name');
  }
}

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Form;
use App\Http\Controllers\TestdbController;
use App\Http\Controllers\TodoController;
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

Route::get('/amol', function(){
  return view('amol');
});

Route::get('/data/{id}',function($id){
  return view('data',array('id'=>$id));
});

//Route::get('/welcome','Anmol@index');
Route::get('user','App\Http\Controllers\User@index');
Route::get('/user/{id}','App\Http\Controllers\User@data');
//redirect method learning;
Route::redirect('/here','/user');
//form tutorial
Route::view('form','form');
Route::post('formSubmit',[Form::class,'index']);

Route::view('usercheck','usercheck')->middleware('UserCheck');
Route::view('denied','denied');

//DataBase learning
Route::get('testdb/',[TestdbController::class,'index']);
Route::get('testdb/{name}/{job}',[TestdbController::class,'store']);
//mini project ToDo
Route::get('todo',[TodoController::class,'index']);
Route::get('todo/create',[TodoController::class,'create']);
Route::post('todo',[TodoController::class,'store']);
Route::delete('todo/{id}',[TodoController::class,'destroy']);
Route::get('todo/{id}',[TodoController::class,'edit']);
Route::put('todo/{id}',[TodoController::class,'update']);

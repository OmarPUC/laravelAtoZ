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

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/test',function(){
  $name = request('name');
  return view('test',[
    'name'  =>  $name,
  ]);
});

Route::get('/', function () {
    // return view('welcome');
    // return ['foo' => 'bar', 'name' => 'omar', 'friend' => 'aminur'];
    $name = request('name');
    return $name;
});

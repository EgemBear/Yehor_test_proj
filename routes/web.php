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


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    $title ='halo!!';
    $name ='Yehor or Kostya';
    return view('hello',
        [
        'title' =>$title,
        'name' => $name
        ]);
});
Route::get('/table', function () {
    $tasks = App\Task::all;
    return view('table', compact('tasks'));
});



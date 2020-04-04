<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TasksController@index');

Route::get('/about', function () {
    return view('welcome');
});


//use App\Task;
//
//Route::get('/task/create', function () {
//    $task = new Task();
//    $task->description('Description');
//    $task->save();
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

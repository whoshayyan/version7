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
|whha
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hayyan',function(){
    return view('hayyan');

});
Route::get('/home', function(){
    return view('home');
});
Route::get('/control' , 'hayyan@index');
Route::get('/home/{id}' , 'hayyan@show');

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

Route::get('/', function () {
    return view('welcome');
});

//controller now handle request
Route::get('/orders', 'OrderController@index' )->middleware('auth');  //only login

 //create before show
Route::get('/orders/create', 'OrderController@create');

//store post request from form
Route::post('/orders', 'OrderController@store');

Route::get('/orders/{id}', 'OrderController@show')->middleware('auth');

//delete order
Route::delete('/orders/{id}', 'OrderController@destroy')->middleware('auth');


Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');

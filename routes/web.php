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


Route::get('/','createController@home');
Route::get('/create', function(){
    return view('create');
});
Route::post('/insert','createController@add');
Route::get('/update/{id}','createController@update');
//Route::post('/edit/{id}','createController@edit');
Route::get('/read/{id}','createController@read');
Route::get('/delete/{id}','createController@delete');




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

Route::get('crud', 'Cruds@index');
Route::resource('addcrud', 'Cruds');
route::get('deletecrud/{id}', 'Cruds@destroy')->name('deletecrud');
route::get('/editcrud/{id}','Cruds@edit');
route::post('/updatecrud/{id}','Cruds@update');


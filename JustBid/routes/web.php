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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', ['uses'=> 'App\Http\Controllers\LoginController@login'])->name('login');
Route::post('/login', ['uses'=> 'App\Http\Controllers\LoginController@verify']);
Route::get('/register', ['uses'=> 'App\Http\Controllers\RegisterController@register'])->name('register.index');
Route::post('/register', ['uses'=> 'App\Http\Controllers\RegisterController@insert'])->name('register.insert');

Route::get('/product-details', ['uses'=> 'App\Http\Controllers\ProductController@show']);

<?php

use Illuminate\Support\Facades\Auth;
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

//views saya pindah ke controler sesuai dengan nama method
// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/', 'PageController@index')->middleware('guest')->name('index');

Route::get('/wish','WishesController@create')->name('wish');
Route::post('/wish','WishesController@store')->name('wish/store');

Route::get('/login', 'AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');

Route::get('/register', 'AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');

Route::get('/landingUser', function () {
    return view('landingUser');
})->middleware('auth')->name('landingUser');

Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

Route::get('/portofolio', 'PageController@portofolio');



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


Route::get('/test','HomeController@checkIn')->name('checkIn');
Route::post('/test','HomeController@postCheckIn');
Route::get('/get-user-in-class/{id_class}', 'HomeController@getUserByClass')->name('user.in.class');
// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login')->middleware('checkUserLogout');
// Route::post('/login', 'Auth\LoginController@login')->name('login');


// Route::get('/', function () {
//     return view('welcome');
// })->name('home')->middleware('checkUserLogin');

// Route::get('/home1', function () {
//     return 'Home1';
// })->name('home1')->middleware('checkUserLogin');

// Route::get('/home', function () {
//     return 'Home';
// })->name('home2')->middleware('checkUserLogin');
// // Auth::routes();
// Route::get('/logout', 'Auth\LoginController@logout')->name('logout')->middleware('checkUserLogin');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



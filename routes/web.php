<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('layouts/user');
});

Auth::routes();
Route::get('/user', 'UserController@index')->name('user')->middleware('user');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/user', 'AcademicController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::middleware('role:admin')->get('/dashboard', function(){
//     return 'dashboard';
// })
// ->name('dashboard');

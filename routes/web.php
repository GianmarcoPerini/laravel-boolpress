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
    return view('guest.home');
});

Auth::routes(['verify'=> true]);



Route::middleware('auth')
->namespace('Admin')
->prefix('admin')
->name('admin.')
->group(function(){
    Route::resource('posts', 'PostController')->only(['create','store','edit','update','destroy']);
    Route::resource('users', 'UserController');
    Route::get('/', 'HomeController@index')->name('home');
});

Route::namespace('Admin')
->prefix('admin')
->name('admin.')
->group(function(){
    Route::resource('posts', 'PostController')->except(['create','store','edit','update','destroy']);
});

Route::resource('mail', 'MailController')->except(['edit','update']);




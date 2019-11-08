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

Route::get('/', function () {
    return view('switch/loading');
});

Route::get('/choose', function () {
    return view('switch/choose');
});

Route::get('/festivals', function () {
    return view('switch/festivals');
});

Route::get('/dashboard', function () {
    return view('switch/dashboard');
});

// login routes
Route::get('/login', 'EntryController@login');
Route::post('/login', 'EntryController@handleLogin');

Route::get('/signup', 'EntryController@signup');
Route::post('/signup', 'EntryController@handleSignup');

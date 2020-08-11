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
    return view('frontend.index');
});

Route::get('/about-us', function () {
    return view('frontend.aboutus');
});


Route::get('/service', function () {
    return view('frontend.services');
});


Route::get('/contact-us', function () {
    return view('frontend.contact');
});

Route::get('/contact-us', function () {
    return view('frontend.contact');
});

Route::get('/book', function () {
    return view('frontend.booking');
});















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

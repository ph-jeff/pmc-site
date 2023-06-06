<?php

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
    return view('homepage');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/home-news', function () {
    return view('home-news');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/news2', function () {
    return view('news-pagination/news2');
});
Route::get('/career', function () {
    return view('career');
});

Route::get('/application-form', function () {
    return view('form/application_form');
});

Route::get('/career2', function () {
    return view('career-pagination/career2');
});
Route::get('/career3', function () {
    return view('career-pagination/career3');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/sample', function () {
    return view('sample');
});



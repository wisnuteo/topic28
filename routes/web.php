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
    return view('index');
});
Route::get('/about', function () {
    return view('about.index');
});
Route::get('/article ', function () {
    return view('article.index');
});
Route::get('/category', function () {
    return view('category.index');
});
Route::get('/contact', function () {
    return view('contact.index');
});

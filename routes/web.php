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
/**Routes User */
Route::get('/', function () {
    return view('home');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/berita', function () {
    return view('berita');
});

/**Routes Admin */
Route::get('/wp-admin', function () {
    return view('admin');
});
Route::get('/penerbangan', function () {
    return view('input_penerbangan');
});
Route::get('/input-blog', function () {
    return view('input-blog');
});

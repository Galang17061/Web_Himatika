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
    return view('index');
})->name('index');

// profile
Route::get('/profile', function () {
    return view('frontend.profile.profile');
})->name('profile');
Route::get('/profile_single',function(){
    return view('frontend.profile.profile_single');
})->name('profile_single');

// blog
Route::get('/blog',function(){
    return view('frontend.blog.blog');
})->name('blog');
Route::get('/blog_single',function(){
    return view('frontend.blog.blog_single');
})->name('blog_single');

// Beasiswa
Route::get('/beasiswa',function(){
    return view('frontend.info_kemahasiswaan.beasiswa.beasiswa');
})->name('beasiswa');
Route::get('/beasiswa_single',function(){
    return view('frontend.info_kemahasiswaan.beasiswa.beasiswa_single');
})->name('beasiswa_single');

// Olimpiade
Route::get('/olimpiade',function(){
    return view('frontend.info_kemahasiswaan.olimpiade.olimpiade');
})->name('olimpiade');
Route::get('/olimpiade_single',function(){
    return view('frontend.info_kemahasiswaan.olimpiade.olimpiade_single');
})->name('olimpiade_single');

// Keprofesian
Route::get('/keprofesian',function(){
    return view('frontend.info_kemahasiswaan.keprofesian.keprofesian');
})->name('keprofesian');
Route::get('/keprofesian_single',function(){
    return view('frontend.info_kemahasiswaan.keprofesian.keprofesian_single');
})->name('keprofesian_single');

// Berita Terkini
Route::get('/berita_terkini',function(){
    return view('frontend.info_kemahasiswaan.berita_terkini.berita_terkini');
})->name('berita_terkini');
Route::get('/berita_terkini_single',function(){
    return view('frontend.info_kemahasiswaan.berita_terkini.berita_terkini_single');
})->name('berita_terkini_single');

// Contact
Route::get('/contact',function(){
    return view('frontend.contact.contact');
})->name('contact');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Login
Route::get('/login', 'Auth\LoginController@index')->name('login_index');
Route::get('/login_proses', 'Auth\LoginController@login')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

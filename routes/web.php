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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Beasiswa detail
Route::get('/main/beasiswa_detail', 'admin\main\beasiswa\beasiswa_detailController@beasiswa_detail')->name('beasiswa_detail');
Route::get('/main/beasiswa_detail/create', 'admin\main\beasiswa\beasiswa_detailController@beasiswa_detail_create')->name('beasiswa_detail_create');
Route::get('/main/beasiswa_detail/edit/{id}', 'admin\main\beasiswa\beasiswa_detailController@beasiswa_detail_edit')->name('beasiswa_detail_edit/{id}');
Route::post('/main/beasiswa_detail/save', 'admin\main\beasiswa\beasiswa_detailController@beasiswa_detail_save')->name('beasiswa_detail_save');
Route::post('/main/beasiswa_detail/update', 'admin\main\beasiswa\beasiswa_detailController@beasiswa_detail_update')->name('beasiswa_detail_update');
Route::get('/main/beasiswa_detail/delete', 'admin\main\beasiswa\beasiswa_detailController@beasiswa_detail_delete')->name('beasiswa_detail_delete');
Route::get('/main/beasiswa_detail/datatable', 'admin\main\beasiswa\beasiswa_detailController@beasiswa_detail_datatable')->name('beasiswa_detail_datatable');

// Beasiswa image
Route::get('/main/beasiswa_image', 'admin\main\beasiswa\beasiswa_imageController@beasiswa_image')->name('beasiswa_image');
Route::get('/main/beasiswa_image/create', 'admin\main\beasiswa\beasiswa_imageController@beasiswa_image_create')->name('beasiswa_image_create');
Route::get('/main/beasiswa_image/edit/{id}', 'admin\main\beasiswa\beasiswa_imageController@beasiswa_image_edit')->name('beasiswa_image_edit/{id}');
Route::post('/main/beasiswa_image/save', 'admin\main\beasiswa\beasiswa_imageController@beasiswa_image_save')->name('beasiswa_image_save');
Route::post('/main/beasiswa_image/update', 'admin\main\beasiswa\beasiswa_imageController@beasiswa_image_update')->name('beasiswa_image_update');
Route::get('/main/beasiswa_image/delete', 'admin\main\beasiswa\beasiswa_imageController@beasiswa_image_delete')->name('beasiswa_image_delete');
Route::get('/main/beasiswa_image/datatable', 'admin\main\beasiswa\beasiswa_imageController@beasiswa_image_datatable')->name('beasiswa_image_datatable');

// Berita Terkini detail
Route::get('/main/berita_terkini_detail', 'admin\main\berita_terkini\berita_terkini_detailController@berita_terkini_detail')->name('berita_terkini_detail');
Route::get('/main/berita_terkini_detail/create', 'admin\main\berita_terkini\berita_terkini_detailController@berita_terkini_detail_create')->name('berita_terkini_detail_create');
Route::get('/main/berita_terkini_detail/edit/{id}', 'admin\main\berita_terkini\berita_terkini_detailController@berita_terkini_detail_edit')->name('berita_terkini_detail_edit/{id}');
Route::post('/main/berita_terkini_detail/save', 'admin\main\berita_terkini\berita_terkini_detailController@berita_terkini_detail_save')->name('berita_terkini_detail_save');
Route::post('/main/berita_terkini_detail/update', 'admin\main\berita_terkini\berita_terkini_detailController@berita_terkini_detail_update')->name('berita_terkini_detail_update');
Route::get('/main/berita_terkini_detail/delete', 'admin\main\berita_terkini\berita_terkini_detailController@berita_terkini_detail_delete')->name('berita_terkini_detail_delete');
Route::get('/main/berita_terkini_detail/datatable', 'admin\main\berita_terkini\berita_terkini_detailController@berita_terkini_detail_datatable')->name('berita_terkini_detail_datatable');

// Berita Terkini image
Route::get('/main/berita_terkini_image', 'admin\main\berita_terkini\berita_terkini_imageController@berita_terkini_image')->name('berita_terkini_image');
Route::get('/main/berita_terkini_image/create', 'admin\main\berita_terkini\berita_terkini_imageController@berita_terkini_image_create')->name('berita_terkini_image_create');
Route::get('/main/berita_terkini_image/edit/{id}', 'admin\main\berita_terkini\berita_terkini_imageController@berita_terkini_image_edit')->name('berita_terkini_image_edit/{id}');
Route::post('/main/berita_terkini_image/save', 'admin\main\berita_terkini\berita_terkini_imageController@berita_terkini_image_save')->name('berita_terkini_image_save');
Route::post('/main/berita_terkini_image/update', 'admin\main\berita_terkini\berita_terkini_imageController@berita_terkini_image_update')->name('berita_terkini_image_update');
Route::get('/main/berita_terkini_image/delete', 'admin\main\berita_terkini\berita_terkini_imageController@berita_terkini_image_delete')->name('berita_terkini_image_delete');
Route::get('/main/berita_terkini_image/datatable', 'admin\main\berita_terkini\berita_terkini_imageController@berita_terkini_image_datatable')->name('berita_terkini_image_datatable');

// Keprofesian Detail
Route::get('/main/keprofesian_detail', 'admin\main\keprofesian\keprofesian_detailController@keprofesian_detail')->name('keprofesian_detail');
Route::get('/main/keprofesian_detail/create', 'admin\main\keprofesian\keprofesian_detailController@keprofesian_detail_create')->name('keprofesian_detail_create');
Route::get('/main/keprofesian_detail/edit/{id}', 'admin\main\keprofesian\keprofesian_detailController@keprofesian_detail_edit')->name('keprofesian_detail_edit/{id}');
Route::post('/main/keprofesian_detail/save', 'admin\main\keprofesian\keprofesian_detailController@keprofesian_detail_save')->name('keprofesian_detail_save');
Route::post('/main/keprofesian_detail/update', 'admin\main\keprofesian\keprofesian_detailController@keprofesian_detail_update')->name('keprofesian_detail_update');
Route::get('/main/keprofesian_detail/delete', 'admin\main\keprofesian\keprofesian_detailController@keprofesian_detail_delete')->name('keprofesian_detail_delete');
Route::get('/main/keprofesian_detail/datatable', 'admin\main\keprofesian\keprofesian_detailController@keprofesian_detail_datatable')->name('keprofesian_detail_datatable');

// Keprofesian Image
Route::get('/main/keprofesian_image', 'admin\main\keprofesian\keprofesian_imageController@keprofesian_image')->name('keprofesian_image');
Route::get('/main/keprofesian_image/create', 'admin\main\keprofesian\keprofesian_imageController@keprofesian_image_create')->name('keprofesian_image_create');
Route::get('/main/keprofesian_image/edit/{id}', 'admin\main\keprofesian\keprofesian_imageController@keprofesian_image_edit')->name('keprofesian_image_edit/{id}');
Route::post('/main/keprofesian_image/save', 'admin\main\keprofesian\keprofesian_imageController@keprofesian_image_save')->name('keprofesian_image_save');
Route::post('/main/keprofesian_image/update', 'admin\main\keprofesian\keprofesian_imageController@keprofesian_image_update')->name('keprofesian_image_update');
Route::get('/main/keprofesian_image/delete', 'admin\main\keprofesian\keprofesian_imageController@keprofesian_image_delete')->name('keprofesian_image_delete');
Route::get('/main/keprofesian_image/datatable', 'admin\main\keprofesian\keprofesian_imageController@keprofesian_image_datatable')->name('keprofesian_image_datatable');

// Olimpiade detail
Route::get('/main/olimpiade_detail', 'admin\main\olimpiade\olimpiade_detailController@olimpiade_detail')->name('olimpiade_detail');
Route::get('/main/olimpiade_detail/create', 'admin\main\olimpiade\olimpiade_detailController@olimpiade_detail_create')->name('olimpiade_detail_create');
Route::get('/main/olimpiade_detail/edit/{id}', 'admin\main\olimpiade\olimpiade_detailController@olimpiade_detail_edit')->name('olimpiade_detail_edit/{id}');
Route::post('/main/olimpiade_detail/save', 'admin\main\olimpiade\olimpiade_detailController@olimpiade_detail_save')->name('olimpiade_detail_save');
Route::post('/main/olimpiade_detail/update', 'admin\main\olimpiade\olimpiade_detailController@olimpiade_detail_update')->name('olimpiade_detail_update');
Route::get('/main/olimpiade_detail/delete', 'admin\main\olimpiade\olimpiade_detailController@olimpiade_detail_delete')->name('olimpiade_detail_delete');
Route::get('/main/olimpiade_detail/datatable', 'admin\main\olimpiade\olimpiade_detailController@olimpiade_detail_datatable')->name('olimpiade_detail_datatable');

// Olimpiade image
Route::get('/main/olimpiade_image', 'admin\main\olimpiade\olimpiade_imageController@olimpiade_image')->name('olimpiade_image');
Route::get('/main/olimpiade_image/create', 'admin\main\olimpiade\olimpiade_imageController@olimpiade_image_create')->name('olimpiade_image_create');
Route::get('/main/olimpiade_image/edit/{id}', 'admin\main\olimpiade\olimpiade_imageController@olimpiade_image_edit')->name('olimpiade_image_edit/{id}');
Route::post('/main/olimpiade_image/save', 'admin\main\olimpiade\olimpiade_imageController@olimpiade_image_save')->name('olimpiade_image_save');
Route::post('/main/olimpiade_image/update', 'admin\main\olimpiade\olimpiade_imageController@olimpiade_image_update')->name('olimpiade_image_update');
Route::get('/main/olimpiade_image/delete', 'admin\main\olimpiade\olimpiade_imageController@olimpiade_image_delete')->name('olimpiade_image_delete');
Route::get('/main/olimpiade_image/datatable', 'admin\main\olimpiade\olimpiade_imageController@olimpiade_image_datatable')->name('olimpiade_image_datatable');

// Post Detail
Route::get('/main/post_detail', 'admin\main\post\post_detailController@post_detail')->name('post_detail');
Route::get('/main/post_detail/create', 'admin\main\post\post_detailController@post_detail_create')->name('post_detail_create');
Route::get('/main/post_detail/edit', 'admin\main\post\post_detailController@post_detail_edit')->name('post_detail_edit');
Route::post('/main/post_detail/save', 'admin\main\post\post_detailController@post_detail_save')->name('post_detail_save');
Route::post('/main/post_detail/update', 'admin\main\post\post_detailController@post_detail_update')->name('post_detail_update');
Route::get('/main/post_detail/delete', 'admin\main\post\post_detailController@post_detail_delete')->name('post_detail_delete');
Route::get('/main/post_detail/datatable', 'admin\main\post\post_detailController@post_detail_datatable')->name('post_detail_datatable');

// Post Image
Route::get('/main/post_image', 'admin\main\post\post_imageController@post_image')->name('post_image');
Route::get('/main/post_image/create', 'admin\main\post\post_imageController@post_image_create')->name('post_image_create');
// Route::get('/post_image/tes', 'admin\main\post\post_imageController@tes')->name('tes');
Route::get('/main/post_image/edit/{id}', 'admin\main\post\post_imageController@post_image_edit')->name('post_image_edit/{id}');
Route::post('/main/post_image/save', 'admin\main\post\post_imageController@post_image_save')->name('post_image_save');
Route::post('/main/post_image/update', 'admin\main\post\post_imageController@post_image_update')->name('post_image_update');
Route::get('/main/post_image/delete', 'admin\main\post\post_imageController@post_image_delete')->name('post_image_delete');
Route::get('/main/post_image/datatable', 'admin\main\post\post_imageController@post_image_datatable')->name('post_image_datatable');

// Category Beasiswa
Route::get('/master/category_beasiswa', 'admin\master\category_beasiswa\category_beasiswaController@category_beasiswa')->name('category_beasiswa');
Route::get('/master/category_beasiswa/create', 'admin\master\category_beasiswa\category_beasiswaController@category_beasiswa_create')->name('category_beasiswa_create');
Route::post('/master/category_beasiswa/save', 'admin\master\category_beasiswa\category_beasiswaController@category_beasiswa_save')->name('category_beasiswa_save');
Route::post('/master/category_beasiswa/update', 'admin\master\category_beasiswa\category_beasiswaController@category_beasiswa_update')->name('category_beasiswa_update');
Route::get('/master/category_beasiswa/delete', 'admin\master\category_beasiswa\category_beasiswaController@category_beasiswa_delete')->name('category_beasiswa_delete');
Route::get('/master/category_beasiswa/datatable', 'admin\master\category_beasiswa\category_beasiswaController@category_beasiswa_datatable')->name('category_beasiswa_datatable');

// Category Post
Route::get('/master/category_post', 'admin\master\category_post\category_postController@category_post')->name('category_post');
Route::get('/master/category_post/create', 'admin\master\category_post\category_postController@category_post_create')->name('category_post_create');
Route::post('/master/category_post/save', 'admin\master\category_post\category_postController@category_post_save')->name('category_post_save');
Route::post('/master/category_post/update', 'admin\master\category_post\category_postController@category_post_update')->name('category_post_update');
Route::get('/master/category_post/edit', 'admin\master\category_post\category_postController@category_post_edit')->name('category_post_edit');
Route::get('/master/category_post/delete', 'admin\master\category_post\category_postController@category_post_delete')->name('category_post_delete');
Route::get('/master/category_post/datatable', 'admin\master\category_post\category_postController@category_post_datatable')->name('category_post_datatable');

// Category Berita Terkini
Route::get('/master/category_berita_terkini', 'admin\master\category_berita_terkini\category_berita_terkiniController@category_berita_terkini')->name('category_berita_terkini');
Route::get('/master/category_berita_terkini/create', 'admin\master\category_berita_terkini\category_berita_terkiniController@category_berita_terkini_create')->name('category_berita_terkini_create');
Route::post('/master/category_berita_terkini/save', 'admin\master\category_berita_terkini\category_berita_terkiniController@category_berita_terkini_save')->name('category_berita_terkini_save');
Route::post('/master/category_berita_terkini/update', 'admin\master\category_berita_terkini\category_berita_terkiniController@category_berita_terkini_update')->name('category_berita_terkini_update');
Route::get('/master/category_berita_terkini/delete', 'admin\master\category_berita_terkini\category_berita_terkiniController@category_berita_terkini_delete')->name('category_berita_terkini_delete');
Route::get('/master/category_berita_terkini/datatable', 'admin\master\category_berita_terkini\category_berita_terkiniController@category_berita_terkini_datatable')->name('category_berita_terkini_datatable');

// Category Olimpiade
Route::get('/master/category_olimpiade', 'admin\master\category_olimpiade\category_olimpiadeController@category_olimpiade')->name('category_olimpiade');
Route::get('/master/category_olimpiade/create', 'admin\master\category_olimpiade\category_olimpiadeController@category_olimpiade_create')->name('category_olimpiade_create');
Route::post('/master/category_olimpiade/save', 'admin\master\category_olimpiade\category_olimpiadeController@category_olimpiade_save')->name('category_olimpiade_save');
Route::post('/master/category_olimpiade/update', 'admin\master\category_olimpiade\category_olimpiadeController@category_olimpiade_update')->name('category_olimpiade_update');
Route::get('/master/category_olimpiade/delete', 'admin\master\category_olimpiade\category_olimpiadeController@category_olimpiade_delete')->name('category_olimpiade_delete');
Route::get('/master/category_olimpiade/datatable', 'admin\master\category_olimpiade\category_olimpiadeController@category_olimpiade_datatable')->name('category_olimpiade_datatable');

// Category Keprofesian
Route::get('/master/category_keprofesian', 'admin\master\category_keprofesian\category_keprofesianController@category_keprofesian')->name('category_keprofesian');
Route::get('/master/category_keprofesian/create', 'admin\master\category_keprofesian\category_keprofesianController@category_keprofesian_create')->name('category_keprofesian_create');
Route::post('/master/category_keprofesian/save', 'admin\master\category_keprofesian\category_keprofesianController@category_keprofesian_save')->name('category_keprofesian_save');
Route::post('/master/category_keprofesian/update', 'admin\master\category_keprofesian\category_keprofesianController@category_keprofesian_update')->name('category_keprofesian_update');
Route::get('/master/category_keprofesian/delete', 'admin\master\category_keprofesian\category_keprofesianController@category_keprofesian_delete')->name('category_keprofesian_delete');
Route::get('/master/category_keprofesian/datatable', 'admin\master\category_keprofesian\category_keprofesianController@category_keprofesian_datatable')->name('category_keprofesian_datatable');

// Profile
Route::get('/frontend/profile', 'frontend\profile\profileController@profile')->name('profile');
Route::get('/frontend/profile_single', 'frontend\profile_single\profile_singleController@profile_single')->name('profile_single');

// Post
Route::get('/frontend/post', 'frontend\post\postController@post')->name('post');
Route::get('/frontend/post_single/{id}', 'frontend\post\postController@post_single')->name('post_single');

// Contact
Route::get('/frontend/contact', 'frontend\contact\contactController@contact')->name('contact');
Route::get('/frontend/contact_single', 'frontend\contact_single\contact_singleController@contact_single')->name('contact_single');

// Beasiswa
Route::get('/frontend/beasiswa', 'frontend\beasiswa\beasiswaController@beasiswa')->name('beasiswa');
Route::get('/frontend/beasiswa_single', 'frontend\beasiswa_single\beasiswa_singleController@beasiswa_single')->name('beasiswa_single');

// Berita Terkini
Route::get('/frontend/berita_terkini', 'frontend\berita_terkini\berita_terkiniController@berita_terkini')->name('berita_terkini');
Route::get('/frontend/berita_terkini_single', 'frontend\berita_terkini_single\berita_terkini_singleController@berita_terkini_single')->name('berita_terkini_single');

// Olimpiade
Route::get('/frontend/olimpiade', 'frontend\olimpiade\olimpiadeController@olimpiade')->name('olimpiade');
Route::get('/frontend/olimpiade_single', 'frontend\olimpiade_single\olimpiade_singleController@olimpiade_single')->name('olimpiade_single');

// Keprofesian
Route::get('/frontend/keprofesian', 'frontend\keprofesian\keprofesianController@keprofesian')->name('keprofesian');
Route::get('/frontend/keprofesian_single', 'frontend\keprofesian_single\keprofesian_singleController@keprofesian_single')->name('keprofesian_single');

// Login
Route::get('/login', 'Auth\LoginController@index')->name('login_index');
Route::get('/login_proses', 'Auth\LoginController@login')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

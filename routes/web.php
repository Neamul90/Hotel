<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/test', function () {
    return view('test');
});
Route::get('/','WelcomeController@index');
Route::get('/accomodation','WelcomeController@accomodation');
Route::get('/gallery.html','WelcomeController@gallery');
Route::get('/about_us.html','WelcomeController@about');
Route::get('/room_details.html','WelcomeController@room_details');
Route::get('/our_staff.html','WelcomeController@staffs');
Route::get('/error.html','WelcomeController@error');
Route::get('/blog.html','WelcomeController@blog');
Route::get('/single-blog.html','WelcomeController@single_blog');
Route::get('/contact-us.html','WelcomeController@contact_us');
Route::get('/booking.html','WelcomeController@booking');
Route::get('/admin','AdminController@index');
Route::post('/login_check','AdminController@login_check');
Route::get('/dashboard','SuperAdminController@index');
Route::get('/logout','SuperAdminController@logout');
Route::get('/add_admin','SuperAdminController@add_admin');
Route::post('/save','SuperAdminController@save_admin');
Route::get('/add_staff','SuperAdminController@add_staff');
Route::post('/save_staff','SuperAdminController@save_staff');
Route::get('/contact_us','ApplicationController@contact');
Route::get('/add_category','ApplicationController@add_category');
Route::get('/category','ApplicationController@category');
Route::post('/save_category','ApplicationController@save_category_info');
Route::get('/unpublished-category/{id}','ApplicationController@unpublished_category');
Route::get('/published-category/{id}','ApplicationController@published_category');
Route::get('/edit-category/{id}','ApplicationController@edit_category');
Route::get('/delete_category/{id}','ApplicationController@delete_category');
Route::post('/update_category/','ApplicationController@update_category');
Route::get('/news','ApplicationController@news');
Route::get('/add_news','ApplicationController@add_news');
Route::post('/save_news','ApplicationController@save_news');
Route::get('/delete_news/{id}','ApplicationController@delete_news');
Route::get('/news_view/{id}','ApplicationController@news_view');








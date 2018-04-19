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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@home')->name('home');
Route::get('/slider', 'HomeController@slider')->name('slider');


Route::get('/blog', 'BlogController@blog')->name('blog');


Route::get('/menu', 'MenuController@menu')->name('menu');
//Route::get('/menu/show', 'MenuController@menuShow')->name('menuShow');
//Route::post('/menu', 'MenuController@menu')->name('menu');
//Route::post('/save', 'MenuController@store')->name('menu-save');
//Route::post('/menu-save', 'MenuController@store')->name('menu-save');



Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/postMail', 'ContactController@mail')->name('mail');


Route::get('/event', 'EventController@event')->name('event');


Route::get('/admin', 'AdminController@admin')->name('admin');

Route::get('/category', 'AdminController@category')->name('category');
Route::get('/category-edit-{id}', 'AdminController@categoryEdit')->name('categoryEdit');
Route::get('/deletepost-{id?}','AdminController@deletepost')->name('deletepost');
Route::get('/categoryList', 'AdminController@categoryList')->name('categoryList');
Route::post('/save', 'AdminController@store')->name('categoryListSave');

Route::get('/fooditem', 'AdminController@fooditem')->name('fooditem');
Route::get('/foodList', 'AdminController@foodList')->name('foodList');
Route::post('/food-save', 'AdminController@foodsave')->name('food-save');
Route::get('/food-edit-{id}', 'AdminController@foodEdit')->name('foodEdit');
Route::get('/delete-{id?}','AdminController@delete')->name('delete');

Route::get('/eventPage', 'AdminController@eventPage')->name('eventPage');
Route::get('/AddEventPage', 'AdminController@AddEventPage')->name('AddEventPage');
Route::post('/AddEventSave', 'AdminController@addEvent')->name('addEvent');
Route::get('/event-edit-{id}', 'AdminController@EditEvent')->name('EditEvent');
Route::get('/event-delete-{id?}','AdminController@deleteEvent')->name('deleteEvent');


Route::get('/get-login', 'LoginController@login')->name('login');
Route::post('/add-login', 'LoginController@addlogin')->name('addlogin');
//Route::get('/a', 'LoginController@login')->name('a');


Route::get('/post', 'PostController@post')->name('post');
Route::get('/single-{id}', 'PostController@single')->name('single');
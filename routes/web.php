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
    return view('welcome');
})->name('home');

/*
|--------------------------------------------------------------------------
| Posts Routes
|--------------------------------------------------------------------------
| Registering resourceful routes for our Posts Controller.
|
|    GET     | /dashboard         | posts.dashboard| dashboard()
|    GET     | /posts             | posts.index    | index()
|    GET     | /posts/create      | posts.create   | create()
|    POST    | /posts             | posts.store    | store()
|    GET     | /posts/{post}      | posts.show     | show()
|    GET     | /posts/{post}/edit | posts.edit     | edit()
|  PUT/PATCH | /posts/{post}      | posts.update   | update()
|   DELETE   | /posts/{post}      | posts.destroy  | destroy()
|
*/

Route::get('/dashboard', 'PostsController@dashboard')->name('posts.dashboard');
Route::resource('posts', 'PostsController');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
| Registering auth resourceful routes.
|
*/

// Authenitcation Routes
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
| Registering admin resourceful routes.
|
*/

Route::get('/users', 'UsersController@index');
Route::get('/users/{user}', 'UsersController@show');
Route::get('/users/{user}/edit', 'UsersController@edit');
Route::put('/users/{user}', 'UsersController@update');
Route::delete('/users/{user}', 'UsersController@destroy');

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('profile.profile');
})->name('profile.profile');

Route::get('auth/login', 'Auth\AuthController@getLogin');


Auth::routes();


// Route::post('follow/{user}', 'FollowsController@store')->name('follows.store');


Route::get('/p/create', 'PostsController@create')->name('posts.create');

Route::get('/p/{post}', 'PostsController@show')->name('posts.show');

Route::post('/p', 'PostsController@store')->name('posts.store');


// Route::get('/user/profile/{user}', 'ProfilesController@show')->name('profile.show');

Route::get('/user/profile/{user}/edit', 'ProfilesController@edit');

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');


Route::get('/home', 'HomeController@index')->name('home');

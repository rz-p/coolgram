<?php

use App\Http\Controllers\Auth\PostsController;
use App\Http\Controllers\Auth\ProfilesController;
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

Route::view('/', 'welcome');



// Route::middleware(['auth:sanctum', 'verified'])->get('/profile/{user}', 'PostsController@show' {
//     return view('profile.profile');
// });

// Route::get('auth/login', 'Auth\AuthController@getLogin');


// Auth::routes();


// Route::get('/home', function () {
//     return view('home');
// })->name('home.index');

// Route::post('follow/{user}', 'FollowsController@store')->name('follows.store');


Route::middleware(['auth:sanctum', 'verified'])->get('/p/create', 'PostsController@create')->name('posts.create');

Route::get('/p/{post}', 'PostsController@show')->name('post.show');

// Route::post('/p', [PostsController::class, 'store'])->name('post.store');

Route::post('/p', 'PostsController@store')->name('post.store');


// Route::get('/user/profile/{user}', [ProfilesController::class, 'show'])->name('profile.show');

// Route::get('/profile/{id}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');

Route::middleware(['auth:sanctum', 'verified'])->get('/profile/{id}/settings', 'ProfilesController@setting')->name('profile.setting');

Route::middleware(['auth:sanctum', 'verified'])->get('/profile/{id}/edit', 'ProfilesController@edit')->name('profile.edit');

// Route::middleware(['auth:sanctum', 'verified'])->patch('/profile/{id}', 'ProfilesController@update')->name('profile.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/myprofile', 'ProfilesController@show')->name('profile.profile');



// Route::get('/home', 'HomeController@index')->name('home');

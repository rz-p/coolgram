<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfilesController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/profile', function () {
    return view('profile.profile');
})->name('dashboard');

// Route::get('auth/login', 'Auth\AuthController@getLogin');


// Auth::routes();


Route::get('/home', function () {
    return view('home');
})->name('home.index');

// Route::post('follow/{user}', 'FollowsController@store')->name('follows.store');


Route::get('/p/create', 'PostsController@create')->name('posts.create');

// Route::get('/p/{post}', [PostsController::class, 'show'])->name('post.show');

// Route::post('/p', [PostsController::class, 'store'])->name('post.store');


// Route::get('/user/profile/{user}', [ProfilesController::class, 'show'])->name('profile.show');

Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');

// Route::patch('/profile/{user}', [ProfilesController::class, 'update'])->name('profile.update');


// Route::get('/home', 'HomeController@index')->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;

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



// ログアウト中のページ_誰でも見れるページ
Route::get('/top', [PostsController::class, 'index'])->name('top');

Route::get('/profile', [UsersController::class, 'profile'])->name('profile');

Route::get('/profile/{user_id}', [UsersController::class, 'profile'])->name('profile');

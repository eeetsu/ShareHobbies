<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\LoginController;

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


// 誰でもアクセス可能なページ（ミドルウェアなし）
Route::get('/top', [PostsController::class, 'index'])->name('top');
Route::get('/profile', [UsersController::class, 'profile'])->name('profile');
Route::get('/profile/{user_id}', [UsersController::class, 'profile'])->name('profile');



// ログアウト中のページ_誰でも見れるページ
Route::middleware(['guest'])->group(function () {
    Route::get('/login',[LoginController::class, 'login'])->name('login');
    Route::post('/login',[LoginController::class, 'login']);
});


// ログイン中のページ
Route::middleware(['auth'])->group(function () {
    Route::get('/login_profile', [PostsController::class, 'login_profile'])->name('login_profile');
    Route::get('/login_top', [PostsController::class, 'login_top'])->name('login_top');
    Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
    Route::get('/update_profile',[UsersController::class, 'showUpdateProfileForm'])->name('update_profile');//プロフィール編集画面を表示
    Route::post('/update_profile',[UsersController::class, 'updateProfile'])->name('update_profile');//プロフィールをアップデート内容を取得する
});

<?php

use App\Http\Controllers\Frontend\AuthenticationController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\UserPostController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthenticationController::class)->prefix('/login')->group(function(){

    Route::get('/', 'index')->name('front.login');

    Route::post('/login-check', 'loginCheck')->name('login.check');
    Route::post('/logout', 'logout')->name('logout');

});

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'do_register'])->name('do.register');

Route::group(['prefix' => '/userdashboard','middleware' => ['user']], function(){
        Route::controller(UserDashboardController::class)->group(function(){
            Route::get('/',  'index')->name('user.dashboard');
            Route::get('/user-posts',  'userPost')->name('user.post');
        });
        Route::controller(UserPostController::class)->group(function(){
            Route::get('/user-all-post',  'index')->name('user.post.all');
            Route::get('/user-posts-create',  'userPostCreatePage')->name('user.post.create.page');
            Route::post('/user-posts-create',  'userPostCreate')->name('user.post.store');
        });
});

?>
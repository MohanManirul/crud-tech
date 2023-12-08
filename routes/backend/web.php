<?php

use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/superadmindashboard', 'middleware' =>['auth']], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});





?>
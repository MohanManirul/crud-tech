<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|----------------------------------------------
| Backend Routes Start
|----------------------------------------------
*/
require_once 'backend/web.php';
/*
|----------------------------------------------
| Backend Routes End
|----------------------------------------------
*/

/*
|----------------------------------------------
| Frontend Routes Start
|----------------------------------------------
*/
    require_once 'frontend/web.php';
/*
|----------------------------------------------
| Frontend Routes End
|----------------------------------------------
*/




Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/projects',[HomeController::class,'projects'])->name('projects');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');



<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/test',[TestController::class,'test'])->middleware('test');
Route::get('/test',function(){
    return "clouse";
});


?>
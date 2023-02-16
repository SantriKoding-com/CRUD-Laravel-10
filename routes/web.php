<?php

use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);
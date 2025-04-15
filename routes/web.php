<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/register', [UserController::class, 'register']);
route::post('/logout', [UserController::class, 'logout']);
route::post('/login', [UserController::class, 'login']);

//Post Routes
route::post('/create-post', [PostController::class, 'createPost']);

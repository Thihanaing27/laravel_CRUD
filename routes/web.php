<?php

use App\Http\Controllers\PostContorller;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostContorller::class, 'index']);


Route::resource('posts', PostContorller::class);

<?php

use App\Http\Controllers\__PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Foundation\Console\JobMakeCommand;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\Route;

Route::get('/',IndexController::class  );
Route::get('/about',AboutController::class);
Route::get('/contact',ContactController::class);

Route::get('/job', [jobController::class,'index'] ); 

Route::resource('blog',PostController::class);

Route::resource('comment',CommentController::class);

Route::resource('tag',TagController::class);




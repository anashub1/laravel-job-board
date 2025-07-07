<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\jobController;
use Illuminate\Foundation\Console\JobMakeCommand;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class ,'index'] );
Route::get('/about',[IndexController::class ,'about'] );
Route::get('/contact',[IndexController::class ,'contact'] );
Route::get('/job', [jobController::class,'index'] ); 
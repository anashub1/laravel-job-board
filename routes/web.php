<?php

use App\Http\Controllers\jobController;
use Illuminate\Foundation\Console\JobMakeCommand;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view:'welcome');
});
Route::get('/job', [jobController::class,'index'] );
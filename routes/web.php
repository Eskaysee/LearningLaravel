<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/about','about');

Route::view('/contact','contact');

Route::controller(JobController::class)->group(function () {
    Route::get('/careers', 'index');

    Route::get('/careers/create', 'create');

    Route::get('/careers/{job}', 'show');

    Route::get('/careers/{job}/edit', 'edit');

    Route::patch('/careers/{job}', 'update');

    Route::delete('/careers/{job}', 'destroy');

    Route::post('/careers', 'store');
});

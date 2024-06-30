<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('/about','about');

Route::view('/contact','contact');

//Route Resources
Route::resource('careers', JobController::class)->parameters([
    'careers' => 'job',
])->only(['index','show','create']);

Route::resource('careers', JobController::class)->parameters([
    'careers' => 'job',
])->only(['store'])->middleware('auth');

Route::get('/careers/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');

Route::resource('careers', JobController::class)->parameters([
    'careers' => 'job',
])->only(['update', 'destroy'])->middleware(['auth', 'can:edit,job']);

//AuthN
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

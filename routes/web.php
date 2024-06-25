<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/careers', function () {
    $jobs = Job::with('employer')->paginate(5);
//    $jobs = Job::with('employer')->simplePaginate(3);
//    $jobs = Job::with('employer')->cursorPaginate(3);
    return view('careers', [
        'jobs' => $jobs
    ]);
});

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

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
    $jobs = Job::with('employer')->latest()->paginate(5);
//    $jobs = Job::with('employer')->simplePaginate(3);
//    $jobs = Job::with('employer')->cursorPaginate(3);
    return view('careers.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/careers/create', function () {
    return view('careers.create');
});

Route::get('/careers/{id}', function ($id) {
    $job = Job::find($id);
    return view('careers.show', ['job' => $job]);
});

Route::post('/careers', function () {
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/careers');
});

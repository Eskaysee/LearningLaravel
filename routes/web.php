<?php

use Illuminate\Support\Arr;
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
    return view('careers', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => 'R35 000'
            ],
            [
                'id' => 2,
                'title' => 'Data Scientist',
                'salary' => 'R30 000'
            ],
            [
                'id' => 3,
                'title' => 'Game Developer',
                'salary' => 'R25 000'
            ]
        ]
    ]);
});

Route::get('/job/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Software Engineer',
            'salary' => 'R35 000'
        ],
        [
            'id' => 2,
            'title' => 'Data Scientist',
            'salary' => 'R30 000'
        ],
        [
            'id' => 3,
            'title' => 'Game Developer',
            'salary' => 'R25 000'
        ]
    ];
    //Short Closure version
//    Arr::first($jobs, fn($job) => $job['id'] == $id);
    $job = Arr::first($jobs, function ($job) use ($id) {
        return $job['id'] == $id;
    });
    return view('job', ['job' => $job]);
});

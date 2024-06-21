<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public  static  function all(): array
    {
        return [
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
    }

    public static function find(int $id): array
    {
        $job =Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if (!$job) {
            abort(404);//optional message, 'Position not available.');
        }
        return $job;
    }
}

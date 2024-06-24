<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model {

    use HasFactory;

    // Table name
    protected $table = 'job_listings';
    protected $fillable = ['title', 'employer_id', 'salary'];
}

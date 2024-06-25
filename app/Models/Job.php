<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model {

    use HasFactory;

    // Table name
    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary', 'employer_id'];

//    fields that should be guarded from being mass assigned
//    protected $guarded = [];

    public function employer()
    {
        return $this -> belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this -> belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
        //relative pivot key would be the tag_id
    }
}

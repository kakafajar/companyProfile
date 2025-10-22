<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
        protected $fillable = [
        'job_id',
        'name',
        'email',
        'phone',
        'cover_letter',
        'CV',
    ];


    public function job()
    {
        return $this->belongsTo(Job::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolMember extends Model
{
    protected $fillable = [
        'school'
    ];

    public $timestamps = false;
}

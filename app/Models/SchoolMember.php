<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolMember extends Model
{
    protected $fillable = [
        'user_id',
        'school'
    ];

    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable=[
        'start',
        'end',
        'degree',
        'university',
        'education_description',
        'people_id',
    ];

}

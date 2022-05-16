<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable=[
        'exp_start',
        'exp_end',
        'designation',
        'company',
        'experience_description',
        'people_id',
    ];
}

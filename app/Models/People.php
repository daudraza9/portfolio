<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $fillable=[
        'first_name',
        'last_name',
        'designation',
        'age',
        'slug',
        'nationality',
        'freelance',
        'address',
        'designation',
        'phone',
        'email',
        'skype',
        'language',
        'experience',
        'project_completed',
        'total_clients',
        'total_tip',
        'description',
        'is_home',
        'image',
        ];
}

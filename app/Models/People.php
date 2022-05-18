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
        'age',
        'slug',
        'nationality',
        'freelance',
        'address',
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
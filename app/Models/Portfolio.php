<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'client',
        'language',
        'url',
        'featured_image',
        'banner_image',
        'people_id',
    ];

    public function people()
    {
        return $this->belongsTo(People::class);
    }
}

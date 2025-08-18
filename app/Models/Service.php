<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'slug',
        'order',
        'template',
        'img',
        'description',
        'sections'
    ];

    protected $casts = [
        'sections' => 'array',
    ];
}

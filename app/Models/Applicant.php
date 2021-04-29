<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'tel',
        'country',
        'state',
        'city',
        'career',
        'studies',
        'volunteer',
        'portuguese_level',
        'english_level',
        'spanish_level',
        'chinese_level',
        'french_level',
        'german_level',
        'japanese_level',
    ];

    protected $dates = [
        'deleted_at'
    ];
}

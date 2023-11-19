<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable=[
        'Name',
        'Lastname',
        'E-mail',
        'City',
        'Country',
        'Summary',
        'Frameworks',
        'Hobbies',
    ];

    protected $casts=[
        'Frameworks'=>'array',
        'Hobbies'=>'array',
    ];
}

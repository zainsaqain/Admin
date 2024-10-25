<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    // Specify which attributes are mass assignable
    protected $fillable = [
        'name',
        'email',
        'password',
        'image', // Add image field
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}

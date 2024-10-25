<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    // Specify the table associated with the model (optional if the table name follows the Laravel convention)
    protected $table = 'registers';

    // Define which attributes are mass assignable
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Optionally, you might want to hide the password when retrieving the model
    protected $hidden = [
        'password',
    ];
}

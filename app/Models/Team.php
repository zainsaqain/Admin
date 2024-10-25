<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'description', 
        'image',
        'user_id', // Add user_id to the fillable array
    ];

    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


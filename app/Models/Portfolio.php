<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'short_description', 
        'description', 
        'image',
        'category_id',
        'user_id', // Add user_id to the fillable array
    ];

    // Define a one-to-many relationship with PortfolioImage
    public function images(): HasMany
    {
        return $this->hasMany(PortfolioImage::class);
    }

    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


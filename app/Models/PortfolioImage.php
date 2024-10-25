<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    use HasFactory;

    // Define the fillable attributes
    protected $fillable = [
        'portfolio_id',
        'image',
    ];

    // Define the relationship to Portfolio
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}


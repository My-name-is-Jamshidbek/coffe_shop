<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Allow only these fields to be mass-assigned
    protected $fillable = [
        'title',
        'description',
    ];
}

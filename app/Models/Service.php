<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';

    // The fields that can be mass-assigned
    protected $fillable = [
        'title',
        'icon',
        'image',
        'description'
    ];
}

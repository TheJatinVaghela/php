<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public $table = 'products';
    protected $fillable = [
        'name',
        'discription',
        'image',
    ];
}

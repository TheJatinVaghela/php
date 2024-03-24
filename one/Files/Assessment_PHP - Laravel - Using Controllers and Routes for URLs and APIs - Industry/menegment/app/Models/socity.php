<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class socity extends Model
{
    use HasFactory;

    public $table = 'socities';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'address',
        'mobile'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    public $table = 'members';

    protected $fillable = [
        'name',
        'email',
        'faltNumber',
        'faltBlock',
        'religion',
        'password'
    ];


}

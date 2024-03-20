<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    use HasFactory;

    public $table = 'employes';

    protected $fillable = [
        'e_name',
        'e_mail',
        'e_password'
    ];
}

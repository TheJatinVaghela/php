<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploader extends Model
{
    use HasFactory;
    public $table ='uploaders';
    protected $fillable =[
        'name',
        'email',
        'password',
    ];
    protected $hidden=[
        'password',
    ];

    protected $casts=[
        'password' => 'hashed',
    ];
}

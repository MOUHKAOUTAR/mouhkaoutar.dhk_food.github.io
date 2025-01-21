<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Gerant extends Authenticatable
{   
    protected $guard = 'gerant';
    protected $fillable = [
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    
}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Fornecedor extends Model
{
    

    protected $fillable = [
        'name', 'email', 'password',
    ];

    
}

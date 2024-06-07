<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name',
        'cpf',
        'birthdate',
        'email',
    ];

    protected $casts = [
        'birthdate' => 'date:d/m/Y',
    ];

    protected $dates = [
        'birthdate',
    ];
}

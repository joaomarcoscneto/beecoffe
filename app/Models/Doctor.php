<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name', 'crm', 'specialty'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
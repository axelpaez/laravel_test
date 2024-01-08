<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'gender',
        'dni',
        'blood_type',
        'phone',
        'email',
        'address',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}

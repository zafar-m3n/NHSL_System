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
        'date_of_birth',
        'email',
        'phone_number',
        'address',
        'appointment_history',
        'medical_history',
        'insurance_provider',
        'emergency_contact',
    ];

    protected $casts = [
        'appointment_history' => 'array',
        'medical_history' => 'array',
    ];
}

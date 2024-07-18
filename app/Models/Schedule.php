<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'date',
        'start_time',
        'end_time',
        'description',
    ];

    public function staff()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }
}


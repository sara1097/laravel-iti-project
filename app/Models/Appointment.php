<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'date',
        'department',
        'doctor',
        'message',
    ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    // Appointment belongs to a Doctor
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }


    
}

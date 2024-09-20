<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    use HasFactory;
    protected $fillable = ['name'];
    
    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'department_id');
    }
    
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

   
}

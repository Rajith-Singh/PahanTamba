<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifyTeacher extends Model
{
    use HasFactory;
    
    public $table = "verify_teachers";

    protected $fillable = [
        'teacher_id',
        'token',
    ];

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}




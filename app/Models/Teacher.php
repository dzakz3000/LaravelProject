<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}

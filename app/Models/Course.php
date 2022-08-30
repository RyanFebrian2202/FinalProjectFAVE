<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'courseName',
        'user_id',
        'coursePicture'
    ];

    public function task(){
        return $this->hasMany(Task::class,'course_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}

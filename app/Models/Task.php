<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'taskName',
        'taskDetail',
        'taskkDeadline',
        //'user_id',
        'course_id',
        'taskPicture'
    ];
}

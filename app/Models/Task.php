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
        'taskDeadline',
        //'user_id',
        'course_id'
    ];

    public function scopeFilter($query, array $filters){
        //Search
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query
                ->where('taskName','like','%' .$search. '%');
        });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable =[
        'class_id',
        'title',
        'date_exam',
        'description'
    ];

    public function Class(){
        return $this->belongsTo(Classes::class,'class_id');
    }
    public function Comment(){
        return $this->hasMany(Comment::class);
    }
}

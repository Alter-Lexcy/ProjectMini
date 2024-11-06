<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'user_id',
        'assignment_id',
        'exam_id',
        'content'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function Assignment(){
        return $this->belongsTo(Assignment::class,'assignment');
    }

    public function Exam(){
        return $this->belongsTo(Exam::class,'exam_id');
    }
}

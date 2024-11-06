<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
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

    public function Assignments(){
        return $this->belongsTo(Assignments::class,'assignment');
    }

    public function Exams(){
        return $this->belongsTo(Exams::class,'exam_id');
    }
}

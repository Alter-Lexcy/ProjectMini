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

    public function Classe(){
        return $this->belongsTo(Classe::class,'class_id');
    }
    public function Comment(){
        return $this->hasMany(Comment::class);
    }
}

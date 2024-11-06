<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable =[
        'name',
        'description',
        'teacher_id'
    ];

    public function Teacher(){
        return $this->belongsTo(Teacher::class,'teacher_id');
    }

    public function Modul(){
        return $this->hasMany(Modul::class);
    }
    public function Exam(){
        return $this->hasMany(Exam::class,);
    }
}

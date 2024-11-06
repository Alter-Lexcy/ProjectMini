<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    protected $fillable =[
        'class_id',
        'title',
        'date_exam',
        'description'
    ];

    public function Clases(){
        return $this->belongsTo(Classes::class,'class_id');
    }
    public function Comments(){
        return $this->hasMany('Comments');
    }
}

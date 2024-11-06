<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable =[
        'name_teacher',
        'NIP',
        'email_teacher',
        'number_teacher'
    ];

    public function class(){
        return $this->hasMany(Classes::class);
    }
}

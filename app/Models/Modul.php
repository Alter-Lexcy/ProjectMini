<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    protected $fillable =[
        'class_id',
        'title',
        'description'
    ];

    public function Classes(){
        return $this->belongsTo(Classes::class,'class_id');
    }
    public function Assignments(){
        return $this->hasMany(Assignments::class);
    }
    public function Material(){
        return $this->hasMany(Material::class);
    }
}

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

    public function Class(){
        return $this->belongsTo(Classes::class,'class_id');
    }
    public function Assignment(){
        return $this->hasMany(Assignment::class);
    }
    public function Material(){
        return $this->hasMany(Material::class);
    }
}

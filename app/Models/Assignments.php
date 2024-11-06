<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
    protected $fillable = [
        'module_id',
        'title',
        'description',
        'date_collection'
    ];

    public function modul(){
        return $this->belongsTo(Modul::class,'module_id');
    }
    public function Comments(){
        return $this->hasMany(Comments::class);
    }
}

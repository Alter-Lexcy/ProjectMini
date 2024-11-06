<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'module_id',
        'title',
        'description',
        'date_collection'
    ];

    public function Modul(){
        return $this->belongsTo(Modul::class,'module_id');
    }
    public function Comment(){
        return $this->hasMany(Comment::class);
    }
}

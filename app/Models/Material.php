<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable =[
        'module_id',
        'title',
        'content',
        'photo'
    ];

    public function Modul(){
        return $this->belongsTo(Modul::class,'module_id');
    }
}

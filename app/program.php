<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable=['name,code,duration'];

    public function departments(){
        return $this->belongsTo(department::class);
    }
    public function courses(){
        return $this->hasMany(course::class);
    }
}

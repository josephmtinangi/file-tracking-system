<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable=[
        'name',
        'code',
        'description'
        
        
        
    ];
    
    public function school()
    {
        return $this->belongsTo(School::class);
    }
    
    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}

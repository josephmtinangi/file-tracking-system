<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = ['name', 'description'];

    public function schools()
    {
        return $this->hasMany(School::class);
    }
}

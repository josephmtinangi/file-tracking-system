<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['name', 'description'];

    public function college()
    {
        return $this->belongsTo(College::class);
    }
}

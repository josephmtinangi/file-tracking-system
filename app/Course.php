<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'code',
        'credit'
    ];

    public function program()
    {
        return $this->belongsTo(Course::class);
    }
}

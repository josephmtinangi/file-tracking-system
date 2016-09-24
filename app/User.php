<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
<<<<<<< HEAD
    //
=======
    use EntrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function roles(){
        return $this->belongsTo('role');
    }
<<<<<<< HEAD
>>>>>>> 5a9449c2c67c4f3a05841debb61500f4feda943d
=======
>>>>>>> 5a9449c2c67c4f3a05841debb61500f4feda943d
}

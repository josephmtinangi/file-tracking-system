<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
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

    public static function getUserRoles($user_id)
    {
        return DB::select('select roles.display_name as display_name from users, roles, role_user where users.id=role_user.user_id and roles.id=role_user.role_id and users.id=:user_id', ['user_id' => $user_id]);
    }
    
    public static function getNewRules($user_id)
    {
        return DB::select('select * from roles where roles.id not in (select roles.id from users, roles, role_user where users.id=role_user.user_id and roles.id=role_user.role_id and users.id=:user_id)', ['user_id' => $user_id]);
    }
}

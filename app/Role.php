<?php namespace App;

use Illuminate\Support\Facades\DB;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable = ['name', 'display_name', 'description'];

    public static function getUserRoles($user_id)
    {
        return DB::select('select roles.display_name as display_name from users, roles, role_user where users.id=role_user.user_id and roles.id=role_user.role_id and users.id=:user_id', ['user_id' => $user_id]);
    }

    public static function getNewRules($user_id)
    {
        return DB::select('select * from roles where roles.id not in (select roles.id from users, roles, role_user where users.id=role_user.user_id and roles.id=role_user.role_id and users.id=:user_id)', ['user_id' => $user_id]);
    }
}

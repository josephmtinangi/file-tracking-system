<?php namespace App;

<<<<<<< .merge_file_a04356
=======
use Illuminate\Support\Facades\DB;
>>>>>>> .merge_file_a01932
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
<<<<<<< .merge_file_a04356
}
=======
    protected $fillable = ['name', 'display_name', 'description'];

    public static function getRolePermissions($role_id)
    {
        return DB::select('select permissions.id, permissions.display_name as display_name from roles, permissions, permission_role WHERE roles.id=permission_role.role_id and permissions.id=permission_role.permission_id and roles.id=:role_id', ['role_id' => $role_id]);
    }

    public static function getNewPermissions($role_id)
    {
        return DB::select('select * from permissions where permissions.id not in (select permissions.id from roles, permissions, permission_role WHERE roles.id=permission_role.role_id and permissions.id=permission_role.permission_id and roles.id=:role_id);', ['role_id' => $role_id]);
    }

}
>>>>>>> .merge_file_a01932

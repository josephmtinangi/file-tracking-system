<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    protected $fillable = [
        'start_date',
        'end_date',
        'reason',
        'attachment',
        'permission_title',
        'user_id'
    ];

    protected $table = 'userpermissions';
}

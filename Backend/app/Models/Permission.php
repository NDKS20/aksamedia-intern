<?php

namespace App\Models;

use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    protected $hidden = [
        'pivot',
        'guard_name',
        'created_at',
        'updated_at',
    ];
}

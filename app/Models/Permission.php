<?php

namespace App\Models;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    use ModelTrait;

    protected $table = "permissions";

    protected $fillable = ['name','display_name','description',];
}
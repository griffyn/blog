<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends BaseModel
{
    const ROLE_ADMIN = 'admin';

    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'name', 'displayname'
    ];
}

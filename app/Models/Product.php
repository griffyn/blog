<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends BaseModel
{
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'name', 'email', 'password'
    ];
}

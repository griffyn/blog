<?php
/**
 * Created by PhpStorm.
 * User: wangjun
 * Date: 2019/9/2
 * Time: 9:18
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\BaseModel
 *
 * @mixin \Eloquent
 */
abstract class BaseModel extends Model
{
    use UuidTrait;

    protected $fillable = [
    ];

    protected $hidden = [
        'id',
    ];
}

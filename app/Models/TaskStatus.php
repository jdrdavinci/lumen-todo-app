<?php
/**
 * Created by PhpStorm.
 * User: jderuijter
 * Date: 10-1-2018
 * Time: 14:11
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskStatus extends Model
{
    protected $table = 'status';

    protected $fillable = [
        'name'
    ];
}
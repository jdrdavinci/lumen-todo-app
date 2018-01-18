<?php
/**
 * Created by PhpStorm.
 * User: jderuijter
 * Date: 10-1-2018
 * Time: 14:11
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * @todo Enum van maken
 * @package App\Models
 */
class Task extends Model
{
    public $timestamps = false;

    protected $table = 'tasks';

    protected $fillable = [
        'description',
        'list_id',
        'status_id'
    ];

    /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(TaskStatus::class, 'status_id');
    }

    /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function list()
    {
        return $this->belongsTo(TaskList::class, 'list_id');
    }
}
<?php

namespace Wisdmlabs\Todolist;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
    ];
}

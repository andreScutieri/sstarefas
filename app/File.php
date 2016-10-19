<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Task;

class File extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function task()
    {
    	return $this->belongsTo(Task::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Project;
use App\File;

class Task extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function project()
    {
    	return $this->belongsTo(Project::class);
    }

    public function files()
    {
    	return $this->hasMany(File::class);
    }
}

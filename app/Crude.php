<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crude extends Model
{
    protected $fillable=['title','project'];

    public function tasks(){
	return $this->hasMany(Task::class);
}

}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Crude extends Model
{
    protected $fillable=['title','project'];

    public function tasks(){
    	return	$this->hasMany(Task::class);
    }
    
    public function addTask($task){
    	$this->tasks()->create($task); 
    }
}


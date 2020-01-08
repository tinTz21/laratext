<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Taxk;
use App\Project;

class Project extends Model
{
    protected $fillable = ['title','description','project_id','task'];

    public function taxks(){
    	return $this->hasMany(Taxk::class);
    }

    public function addTask($task){
    	$this->taxks()->create($task);
    }

}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Taxk;
use App\Project;
class ProjectTaxkController extends Controller
{
    public function update(Taxk $task){
    	$task->update([
    		'completed'=>request()->has('completed')
    		]);
    	return back();
    }

    public function store(Project $project){
    	$att=request()->validate(['task'=>'required']);

    	$project->addTask($att);
    	
    	return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Crude;
class CrudeTaskController extends Controller
{

	public function store(Crude $crude){
		$crude->addTask(request()->validate(['task'=>'required|min:10']));
		return back();
	}

    public function update(Task $task){
        $task->complete(request()->has('completed'));
        return back();
    }
}

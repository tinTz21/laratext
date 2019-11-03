<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function displayed(){
    	return view('/pages/sticky',['tino'=>'sideBar']);
    }

    public function crudeview(){
    	return view('/pages/crude');
    }

    public function test1(){

    	return view('/pages/test1',['test1'=>'Test Var']);
    }
}

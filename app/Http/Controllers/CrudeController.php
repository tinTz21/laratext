<?php

namespace App\Http\Controllers;

use App\Crude;
use Illuminate\Http\Request;

class CrudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crude=Crude::all();

        return view('crude.index',compact('crude'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crude.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crude=new Crude;
        $crude->title=request('title');
        $crude->project=request('project');
        $crude->save();
        return redirect('crude');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crude  $crude
     * @return \Illuminate\Http\Response
     */
    public function show(Crude $crude)
    {
        return view('crude.show',compact('crude'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crude  $crude
     * @return \Illuminate\Http\Response
     */
    public function edit(Crude $crude)
    {
        return view('crude.edit',compact('crude'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crude  $crude
     * @return \Illuminate\Http\Response
     */
    public function update(Crude $crude)
    {
        $crude->title=request('title');
        $crude->project=request('project');
        $crude->save();
        return redirect('crude');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crude  $crude
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crude $crude)
    {
        $crude->delete();
        return redirect('crude');
    }
}

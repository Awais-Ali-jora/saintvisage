<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Practice;

class PracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $practices= Practice::all();
        return view('admin.practice.index',compact('practices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.practice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'percentage'=>'required',
        ]);
        $practice= new Practice();
        $practice->title=$request->title;
        $practice->description=$request->description;
        $practice->percentage=$request->percentage;
        $practice->save();
        return redirect()->route('practice.index')->with('success','Inserted Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $practice= Practice::findOrFail($id);
        return view('admin.practice.edit',compact('practice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'percentage'=>'required',
        ]);
        $practice= Practice::findOrFail($id);
        $practice->title=$request->title;
        $practice->description=$request->description;
        $practice->percentage=$request->percentage;
        $practice->save();
        return redirect()->route('practice.index')->with('success','Updated Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $practice= Practice::findOrFail($id);
        $practice->delete();
        return redirect()->route('practice.index')->with('success','Deleted Success');
    }
}

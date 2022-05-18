<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Why;
use Storage;

class WhyWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whys= Why::all();
        return view('admin.why.index',compact('whys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.why.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);
        $why= new Why();
        $why->title=$request->title;
        $why->description=$request->description;
        $why->image=$request->image->store('why');
        $why->save();
        return redirect()->route('why.index')->with('success','Inserted Success');
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
        $why= Why::findOrFail($id);
        return view('admin.why.edit',compact('why'));
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
            'image'=>'nullable|image',
        ]);
        $why= Why::findOrFail($id);
        $why->title=$request->title;
        $why->description=$request->description;
        $old=null;
        if($request->has('image')):
            $old=$why->image;
            $why->image=$request->image->store('why');
        endif;
        $why->save();
        if($old !=null):
            Storage::delete($old);
        endif;
        return redirect()->route('why.index')->with('success','Updated Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $why= Why::findOrFail($id);
        $img=$why->image;
        $why->delete();
        Storage::delete($img);
        return redirect()->route('why.index');
    }
}

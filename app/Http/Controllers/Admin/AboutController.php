<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $about = About::first();
       return view('admin.about.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'who'=>'required',
            'mission'=>'required',
            'vision'=>'required',
            'country'=>'required',
            'employee'=>'required',
            'smile'=>'required',
            'face'=>'required',
            'about'=>'required'
        ]);
        $about= new About();
        $about->who=$request->who;
        $about->mission=$request->mission;
        $about->vission=$request->vision;
        $about->country=$request->country;
        $about->employee=$request->employee;
        $about->smile=$request->smile;
        $about->faces=$request->face;
        $about->about=$request->about;
        $about->save();
        return redirect()->route('About.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::first();
        return view('admin.about.edit',compact('about'));
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
            'who'=>'required',
            'mission'=>'required',
            'vision'=>'required',
            'country'=>'required',
            'employee'=>'required',
            'smile'=>'required',
            'face'=>'required',
            'about'=>'required'
        ]);
        $about= About::first();
        $about->who=$request->who;
        $about->mission=$request->mission;
        $about->vission=$request->vision;
        $about->country=$request->country;
        $about->employee=$request->employee;
        $about->smile=$request->smile;
        $about->faces=$request->face;
        $about->about=$request->about;
        $about->save();
        return redirect()->route('About.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

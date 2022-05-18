<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Svtreatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SvtreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $svs=Svtreatment::get();
        return view('admin.svtreatment.index',compact('svs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.svtreatment.create');
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
            'image'=>'required',
        ]);
        $clinic=new Svtreatment();
        $clinic->title=$request->title;
        $clinic->description=$request->description;
        $clinic->image=$request->image->store('svtreatment');
        $clinic->save();
        return redirect()->route('clinic.index')->with('success','Inserted success');
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
        $sv=Svtreatment::where('id',$id)->first();
        return view('admin.svtreatment.edit',compact('sv'));
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
        ]);
        $clinic= Svtreatment::where('id',$id)->first();
        if($clinic != null){
            $clinic->title=$request->title;
            $clinic->description=$request->description;
            $old=null;
            if($request->has('image')){
                $old=$clinic->image;
                $clinic->image=$request->image->store('svtreatment');
            }
            $clinic->save();
            if($old !=null){
                Storage::delete($old);
            }
            return redirect()->route('svtreatment.index')->with('success','Inserted success');
        }
        else{
            return back()->with('error','Not Found');
        }
        
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

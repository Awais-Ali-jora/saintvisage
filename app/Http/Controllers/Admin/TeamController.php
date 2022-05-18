<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=Team::paginate(10);
        return view('admin.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
            'name'=>'required',
            'designation'=>'required',
            'image'=>'required',
            'cat'=>'required'
        ]);
        $about= new Team();
        $about->name=$request->name;
        $about->designation=$request->designation;
        $about->image=$request->image->store('team');
        $about->cat=$request->cat;
        $about->save();
        return redirect()->route('Team.index')->with('success','Inserted Success');
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
        $team=Team::where('id',$id)->first();
        return view('admin.team.edit',compact('team'));
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
            'name'=>'required',
            'designation'=>'required',
            'image'=>'nullable|image',
            'cat'=>'required'
        ]);
        $team= Team::where('id',$id)->first();
        $team->name=$request->name;
        $team->designation=$request->designation;
        $team->cat=$request->cat;
        $oldimage=null;
        if($request->has('image')){
            $oldimage=$team->image;
            $team->image=$request->image->store('team');
        }
        $team->save();
        if($oldimage != null){
            Storage::delete($oldimage);
        }
        return redirect()->route('Team.index')->with('success','Updated Success');
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

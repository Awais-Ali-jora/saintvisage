<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:admin','admin.verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners=Banner::all();
        return view('admin.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
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
            'type'=>'required',
            'bio'=>'nullable',
            'image'=>'required'
        ]);
        $banner =new Banner();
        $banner->image=$request->image->store('banner');
        if($request->type== 'home'):
            $banner->is_home=1;
        endif;
        if($request->type== 'about'):
            $banner->is_about=1;
        endif;
        if($request->type== 'work'):
            $banner->is_work=1;
        endif;
        if($request->type== 'treatment'):
            $banner->is_treatment=1;
        endif;
        if($request->type== 'contact'):
            $banner->is_contact=1;
        endif;
        if($request->type != 'home'):
            $banner->bio=$request->bio;
        endif;
        $banner->save();
        return redirect()->route('banner.index')->with('success','Banner added success');
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
        $banner=Banner::where('id',$id)->first();
        return view('admin.banner.edit',compact('banner'));
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
            'image'=>'nullable',
            'bio'=>'nullable'
        ]);
        $banner=Banner::where('id',$id)->first();
        $oldbanner=null;
        if($request->file('image')){
            $oldbanner=$banner->image;
            $banner->image=$request->image->store('banner');
        }
        if($request->bio !=null):
            $banner->bio=$request->bio;
        endif;
        $banner->save();
        if($oldbanner!=null):
            Storage::delete($oldbanner);
        endif;
        return redirect()->route('banner.index')->with('success','Updated success');
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

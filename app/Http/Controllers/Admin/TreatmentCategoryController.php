<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TreatmentCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TreatmentCategoryController extends Controller
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
        $categories=TreatmentCategory::all();
        return view('admin.treatmentcategory.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.treatmentcategory.create');
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
            'image'=>'required',
            'cattitle'=>'required',
            'bantitle'=>'required'
        ]);
        $cat =new TreatmentCategory();
        $cat->image=$request->image->store('category');
        $cat->title=$request->cattitle;
        $cat->image_title=$request->bantitle;
        $cat->save();
        return redirect()->route('treatment.cat.index')->with('success','Inserted Success');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=TreatmentCategory::where('id',$id)->first();
        return view('admin.treatmentcategory.edit',compact('category'));
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
        	'image'=>'required',
            'cattitle'=>'required',
            'bantitle'=>'required'
        ]);
        $category=TreatmentCategory::where('id',$id)->first();
        $oldcategory=null;
        if($request->file('image')){
            $oldcategory=$category->image;
            $category->image=$request->image->store('category');
        }
        $category->title=$request->cattitle;
        $category->image_title=$request->bantitle;
        $category->save();
        if($oldcategory!=null):
            Storage::delete($oldcategory);
        endif;
        return redirect()->route('treatment.cat.index')->with('success','Updated Success');
    }
}

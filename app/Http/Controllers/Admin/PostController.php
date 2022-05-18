<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TreatmentCategory;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('id','DESC')->paginate(10);
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=TreatmentCategory::all();
        return view('admin.post.create',compact('categories'));
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
            'cat_id'=>'required',
            'description'=>'required',
            'image'=>'required',
            'thumbnail_image'=>'required',
            'banner_title'=>'required|',
            'banner_image'=>'required',
        ]);
        $post=new Post();
        $post->title=$request->title;
        $post->cat_id=$request->cat_id;
        $post->description=$request->description;
        $post->image=$request->image->store('post');
        $post->thumbnail_image=$request->thumbnail_image->store('post');
        $post->banner_title=$request->banner_title;
        $post->banner_image=$request->banner_image->store('post');
        $post->save();
        return redirect()->route('post.index')->with('success','Post added sucess');
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
        $post=Post::where('id',$id)->first();
        $categories=TreatmentCategory::all();
        if($post != null){
            return view('admin.post.edit',compact('post','categories'));
        }
        else{
         return back()->with('error','not found');   
        }
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
            'cat_id'=>'required',
            'description'=>'required',
            'image'=>'nullable',
            'thumbnail_image'=>'nullable',
            'banner_title'=>'required|',
            'banner_image'=>'nullable',
        ]);
        $post=Post::where('id',$id)->first();
        $post->title=$request->title;
        $post->cat_id=$request->cat_id;
        $post->description=$request->description;
        $oldImage=null;
        if($request->has('image')){
            $oldImage=$post->image;
            $post->image=$request->image->store('post');
        }
        $oldthumbail=null;
        if($request->has('thumbnail_image')){
            $oldthumbail=$post->oldthumbail;
        $post->thumbnail_image=$request->thumbnail_image->store('post');
        }
        $post->banner_title=$request->banner_title;
        $oldBImage=null;
        if($request->has('banner_image')){
            $oldBImage=$post->banner_image;
            $post->banner_image=$request->banner_image->store('post');
        }       
        $post->save();
        if($oldImage !=null){
            Storage::delete($oldImage);
        }
        if($oldthumbail !=null){
            Storage::delete($oldthumbail);
        }
        if($oldBImage !=null){
            Storage::delete($oldBImage);
        }
        return redirect()->route('post.index')->with('success','Post added sucess');
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

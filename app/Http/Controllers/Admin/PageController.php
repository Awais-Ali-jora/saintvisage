<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
	 public function __construct()
    {
        $this->middleware(['auth:admin','admin.verified']);
    }
    public function showPage($pageName){
      // return $pageName;
      $pages = ['About-Us','Privacy-Policy','Terms-and-Conditions'];
      if(in_array($pageName, $pages)){
          $page = Page::where('name',$pageName)->first();

          return view('admin.layouts.pages')->with('page',$page);
      }
      abort(404);
    }

    public function editPage(Request $request,$pageName){
      $pages = ['About-Us','Privacy-Policy','Terms-and-Conditions'];
      
      if(in_array($pageName, $pages)){
        if($request->has('Details')){
          $page = Page::where('name',$pageName)->first();
          $page->text = $request->input('Details');
          $page->save();
        }
        if($request->hasFile('file')){
            $page=Page::where('name',$pageName)->first();
            $path=$request->file('file')->store('Pages');
            $page->image=$path;
            $page->save();
          }  
           return view('admin.layouts.pages',compact('page'));
      }//array if end
    }
}

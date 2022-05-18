<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Newsletter;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware(['auth:admin','admin.verified']);
    }
    public function index(){
    	$admin=auth()->user();
    	return view('admin.blank',compact('admin'));
    }
    public function newsletter(){
    	$newsletters =Newsletter::orderBy('id','DESC')->paginate(10);
    	return view('admin.newsletter',compact('newsletters'));
    }
    public function printNewsletter(){
        $newsletters =Newsletter::orderBy('id','DESC')->get();
        $pdf = \PDF::loadView('admin.printnewsletter',compact('newsletters'));
        return $pdf->download('invoice.pdf');
        // return view('admin.newsletter',compact('newsletters'));
    }
    public function emailSent(Request $request){
        $this->validate($request,[
            'description'=>'required'
        ]);
        $data=['email'=>$request->description];
        $newsletters =Newsletter::orderBy('id','DESC')->get();
        foreach($newsletters as $news){
            Mail::send('admin.email',$data, function($message) use($news) {
                $message->to($news->email, 'Saintsavage')->subject
                ('Newsletter');
                $message->from('admin@site.com','Admin');
            });    
        }        
        return redirect()->route('show.newsnetter')->with('success','Email sent success');
    }
    public function emailNewsletter(){
        return view('admin.emailnewsletter');
    }
}

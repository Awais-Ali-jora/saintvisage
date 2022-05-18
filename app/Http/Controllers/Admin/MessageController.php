<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;

class MessageController extends Controller
{
    public function index(){
        $messages=Message::orderBy('id','DESC')->paginate(15);
        return view('admin.message',compact('messages'));
    }
    public function sendMessage(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required',
        ]);
        $message= new Message();
        $message->name=$request->name;
		if($request->has('type')):
        	$message->type=$request->type;
			$message->zip=$request->zip;
        	$message->country=$request->country;
		endif;
        $message->email=$request->email;
        $message->phone=$request->phone;
        $message->message=$request->message;
        if($request->has('practice')):
            $message->practice=$request->practice;
        endif;
        $message->save();
        return back()->with('success','Thanks for submit inquire we will contact you soon');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\General;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $general=General::first();
        return view('admin.general.index',compact('general'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
            'ginquire'=>'required',
            'mpublic'=>'required',
            'bopen'=>'required',
            'adepartment'=>'required',
            'fb'=>'required',
            'tweeter'=>'required',
            'insta'=>'required',
            'ticktok'=>'required',
            'whatsapp'=>'required',
            'network_title'=>'required'
        ]);
        $general=General::findOrFail($id);
        $general->ginquire=$request->ginquire;
        $general->mpublic=$request->mpublic;
        $general->bopen=$request->bopen;
        $general->adepartment=$request->adepartment;
        $general->fb=$request->fb;
        $general->tweeter=$request->tweeter;
        $general->insta=$request->insta;
        $general->tiktok=$request->ticktok;
        $general->whatsapp=$request->whatsapp;
        $general->network_title=$request->network_title;
        if($request->has('network_image')){
            $general->network_image=$request->network_image->store('general');
        }
        $general->save();
        return redirect()->route('general.index')->with('success','Updated success');
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

<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Country;
use App\Http\Controllers\Controller;
use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::orderBy('id','DESC')->paginate(10);
        return view('admin.location.index',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::get();
        $cities= City::get();
        return view('admin.location.create',compact('countries','cities'));

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
            'contry_id'=>'required',
            'city_id'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'longitude'=>'required',
            'latitude'=>'required',
        ]);
        $location= new Location();
        $location->title=$request->title;
        $location->country_id=$request->contry_id;
        $location->city_id=$request->city_id;
        $location->address=$request->address;
        $location->phone=$request->phone;
        $location->email=$request->email;
        $location->longitude=$request->longitude;
        $location->latitude=$request->latitude;
        $location->save();
        return redirect()->route('location.index')->with('success','Added Success');
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
        $location= Location::where('id',$id)->first();
        $countries = Country::get();
        $cities= City::get();
        return view('admin.location.edit',compact('location','countries','cities'));
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
            'contry_id'=>'required',
            'city_id'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'longitude'=>'required',
            'latitude'=>'required',
        ]);
        $location= Location::where('id',$id)->first();
        $location->title=$request->title;
        $location->country_id=$request->contry_id;
        $location->city_id=$request->city_id;
        $location->address=$request->address;
        $location->phone=$request->phone;
        $location->email=$request->email;
        $location->longitude=$request->longitude;
        $location->latitude=$request->latitude;
        $location->save();
        return redirect()->route('location.index')->with('success','Updated Success');
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

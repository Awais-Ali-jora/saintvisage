<?php

namespace App\Http\Controllers\Website;

use App\About;
use App\Clinic;
use App\Continent;
use App\General;
use App\Http\Controllers\Controller;
use App\Location;
use App\Message;
use App\Models\Banner;
use App\Models\TreatmentCategory;
use App\Newsletter;
use App\Partner;
use App\Post;
use App\Practice;
use App\Svtreatment;
use App\Team;
use App\Why;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner=Banner::where('is_home',1)->first();
        $work=Why::first();
        $clinics=Clinic::get();
        $svs=Svtreatment::get();
        $about=About::first();
        $partners=Partner::get();
        $general=General::first();
        return view('website.index',compact('banner','work','clinics','svs','about','partners','general'));
    }
    public function contactUs()
    {
        $banner=Banner::where('is_contact',1)->first();
        $general=General::first();
        return view('website.contact',compact('banner','general'));
    }
    public function about()
    {
        $banner=Banner::where('is_about',1)->first();
        $about=About::first();
        $teams=Team::all();
        return view('website.about',compact('banner','about','teams'));
    }
    public function work(){
        $whys=Why::all();
        $practices=Practice::all();
        $banner=Banner::where('is_work',1)->first();
        return view('website.work',compact('whys','practices'));
    }
    public function newsletter(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'country'=>'required'
        ]);
        $news=new Newsletter();
        $news->email=$request->email;
        $news->country=$request->country;
        $news->save();
        return redirect()->route('index')->with('success','Subscribe success!');
    }
    public function posts($id){
        $posts=Post::where('cat_id',$id)->get();
        $banner=TreatmentCategory::where('id',$id)->first();
        return view('website.posts',compact('posts','banner'));
    }
    public function getPost($id){
        $post=Post::where('id',$id)->first();
        return view('website.postdetail',compact('post'));
    }
    public function location(){
        $locations=Location::orderBy('id','DESC')->get();
        $continents=Continent::whereHas('countries',function($query){
            $query->whereHas('cities',function($q2){
                $q2->has('locations','>=',1);
            });
        })->with('countries.cities.locations')->get();
        // dd($continents);
        return view('website.location',compact('locations','continents'));
    }
	public function getInstagram(){
        $url = 'https://graph.instagram.com/me/media?fields=id,caption,media_url,permalink&access_token=IGQVJVYm8wbXpZAdWZAwNXFiQmdHVlU1QVRzcTdJWWF6ZAWZAPU2t2OHlvZAGhwcTBpSFBFb0pSTjA2V3lNY1F6VXNORHJGQmxMaDZAzckFFYWZAPNWl0am5ETUN3OVQ4dUJNcGd5eXpUZAnFrdl9MR3pLYUhLQQZDZD';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, Array("User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.15) Gecko/20080623 Firefox/2.0.0.15") ); 
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result= curl_exec ($ch);
        curl_close ($ch);
        $data = json_decode($result); 
        return view('website.instagram',compact('data'))->render();
    }
}

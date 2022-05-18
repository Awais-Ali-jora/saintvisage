@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.3.13/slick.css" />
@endsection
@section('main-contents')
<div class="fixed-si-wrapper">
            <div class="cu" id="cu-slide">
                <h5>contact us</h5>
                <div class="cu-form">
                    <h6>contact us</h6>
                    
				<form action="{{route('send.contact')}}" method="post">
                        @csrf
                    <div class="row p-2">
                        <div class="col-12">
                            <div class="input-group">
                                <input type="text" class="form-control"name="name" placeholder="Name" />
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <div class="input-group">
                                <input type="number" class="form-control" name="phone" placeholder="Phone" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group my-3">
                                <textarea class="form-control" rows="4" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group">
                                <button class="btn yellow-btn text-white rounded-pill w-100">Submit</button>
                            </div>
                        </div>
                    </div>
					</form>
                </div>
            </div>
            <div class="cu-whatsapp">
                <a href="#">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <div class="cu-w-slider">
                    <a href="#">
                        <h6>WHATSAPP</h6>
                    </a>
                </div>
            </div>
            <div class="cu-messenger">
                <a href="#" id="cu-messenger">
                    <i class="fab fa-facebook-messenger"></i>
                </a>
                <div class="cu-m-slider">
                    <a href="#">
                        <h6>facebook messenger</h6>
                    </a>
                </div>
            </div>
        </div>
    <section id="dt-treatment">
		<div class="cth">
            <div class="container">
                <div class="row">
                    <div class="offset-3 col-6 d-flex justify-content-center text-center">
                        <div class="logo">
                            <img class="img-fluid" src="../assets/images/banner-logo.png" />
                            <p>{{$banner->image_title}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="common-top-header" style="background: url({{Storage::disk('public')->url($banner->image)}});background-size: cover;
    background-position: center center;">
            </div>
        </div>

    </section>

    <section id="dental-treatment">
        <div class="container">
            <div class="row">
                <div class="col-xxl-11 col-xl-11 mx-auto">
					<div class=" dt-slider-wrapper ">
                    @foreach($posts as $post)
                    
                        <div class="dt-slider-item " style="height:350px">
                            <a href="{{route('post.detail',$post->id)}}">
                                <div class="dt-img ">
                                    <img src="{{Storage::disk('public')->url($post->banner_image)}}" />
                                    <div class="dt-slide-overlay ">
                                        <span>view treatment</span>
                                    </div>
                                </div>
                            </a>
                            <a href="{{route('post.detail',$post->id)}}">{{$post->title}}</a>
                        </div>
                        @endforeach
                    </div>
					
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
@endsection
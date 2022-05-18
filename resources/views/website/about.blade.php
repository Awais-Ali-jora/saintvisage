@extends('layouts.app')
@section('css')
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection
@section('main-contents')
    <section id="about-us">
		<div class="cth">
            <div class="container">
                <div class="row">
                    <div class="offset-3 col-6 d-flex justify-content-center text-center">
                        <div class="logo">
							<img class="img-fluid" src="../assets/images/banner-logo.png" />
                            
                            <p>{{ $banner->bio }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="common-top-header" style="background:url({{ Storage::disk('public')->url($banner->image)}});background-size: cover;
    background-position: center center;">
            </div>
        </div>
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
        <div class="common-top-header-btns">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-9 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 mx-auto">
                        <div class="row gx-0">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <a href="{{route('about')}}">ABOUT SAINT VISAGE</a>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <a href="#hod-link">HEAD OF DEPARTMENTS</a>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <a href="#sp-link">SENIOR PRACTITIONERS</a>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                <a href="#sc-link">SENIOR COORDINATORS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 mx-auto">
                    <div class="who-are-we-wrapper">
                        <div class="who-are-we">
                            <div class="about-icon">
                                <img src="{{asset('assets/images/about-us-01.png')}}" />
                                <h4>Who are we?</h4>
                            </div>
                            <div class="hover-details">
                                <h5>who are we?</h5>
                                <p>{!! $about->who !!}</p>
                            </div>
                        </div>
                        <div class="who-are-we">
                            <div class="about-icon">
                                <img src="{{asset('assets/images/mission-01.png')}}" />
                                <h4>Mission?</h4>

                            </div>
                            <div class="hover-details">
                                <h5>who are we?</h5>
                                <p>{!! $about->mission !!}</p>
                            </div>

                        </div>
                        <div class="who-are-we">
                            <div class="about-icon">
                                <img src="{{asset('assets/images/vision-01.png')}}" />
                                <h4>vision?</h4>
                            </div>
                            <div class="hover-details">
                                <h5>who are we?</h5>
                                <p>{!! $about->vission !!}</p>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="img-test">
                        <img src="../assets/images/mission-01.png" />
                    </div> -->
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-10 col-12 mx-auto">
                    <div class="who-are-we-wrapper">
                        <div class="who-are-we">
                            <div class="about-icon">
                                <img src="../assets/images/group.svg" />
                                <h4>Who are we?</h4>
                            </div>
                            <div class="hover-details">
                                <h5>who are we?</h5>
                                <p>{!! $about->who !!}</p>
                            </div>
                        </div>
                        <div class="who-are-we">
                            <div class="about-icon">
                                <img src="../assets/images/aim.svg" />
                                <h4>Mission?</h4>

                            </div>
                            <div class="hover-details">
                                <h5>who are we?</h5>
                                <p>{!! $about->mission !!}</p>
                            </div>

                        </div>
                        <div class="who-are-we">
                            <div class="about-icon">
                                <img src="../assets/images/eye.svg" />
                                <h4>vision?</h4>
                            </div>
                            <div class="hover-details">
                                <h5>who are we?</h5>
                                <p>{!! $about->vission !!}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="wc-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-11 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mx-auto">
                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 mx-auto">
                                <div class="wc-item">
                                    <h2>{{ $about->country }} +</h2>
                                    <h6>countries</h6>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 mx-auto">
                                <div class="wc-item">
                                    <h2>{{ $about->employee }} +</h2>
                                    <h6>Employees</h6>
                                </div>

                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 mx-auto">
                                <div class="wc-item">
                                    <h2>{{ $about->smile }} +</h2>
                                    <h6>SMILES TRANSFORMED</h6>
                                </div>

                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 mx-auto">
                                <div class="wc-item">
                                    <h2>{{ $about->faces }} +</h2>
                                    <h6>FACES REJUVENATED</h6>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-sv">
            <div class="container">
                <div class="row">
                    <div
                        class="col-xl-7 col-xl-7 col-lg-8 col-md-10 col-sm-12 col-12 mx-auto d-flex align-items-center flex-column">
                        <div class="">
                            <img class="img-fluid" src="../assets/images/wwu-logo.png">
                        </div>
                        <h3>ABOUT SAINT VISAGE</h3>
                        <p style="text-align: justify;">{!! $about->about !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="as-sliders-wrapper">
            <div class="hod" id="hod-link">
                <h3>head of DEPARTMENTS</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-7 col-xl-7 mx-auto">
                             <div class="as-hod-slider">
                                @foreach($teams->where('cat','HEAD OF DEPARTMENTS') as $head)
                                    <div class="as-slider-item">
                                        <div class="as-slider-img">
                                            <img class="img-fluid" src="{{ Storage::disk('public')->url($head->image) }}">
                                        </div>
                                        <h6><span>{{ $head->name }}</span></h6>
                                        <small>{{ $head->designation }}</small>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hod" id="sp-link">
                <h3>head of PRACTITIONERS</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-7 col-xl-7 mx-auto">
                            <div class="as-hod-slider">
                             @foreach($teams->where('cat','SENIOR PRACTITIONERS') as $head)
                                <div class="as-slider-item">
                                    <div class="as-slider-img">
                                        <img class="img-fluid" src="{{ Storage::disk('public')->url($head->image) }}">
                                    </div>
                                    <h6><span>{{ $head->name }}</span></h6>
                                    <small>{{ $head->designation }}</small>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hod" id="sc-link">
                <h3>senior COORDINATORS</h3>
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-7 col-xl-7 mx-auto">
                            <div class="as-hod-slider">
                                 @foreach($teams->where('cat','SENIOR COORDINATORS') as $head)
                                <div class="as-slider-item">
                                    <div class="as-slider-img">
                                        <img class="img-fluid" src="{{ Storage::disk('public')->url($head->image) }}">
                                    </div>
                                    <h6><span>{{ $head->name }}</span></h6>
                                    <small>{{ $head->designation }}</small>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection    
@section('js')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript " src="{{ asset('assets/js/particles.js ') }}"></script>
@endsection

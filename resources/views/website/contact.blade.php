@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.3.13/slick.css" />
@endsection
@section('main-contents')
    <section id="contact-us">
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
    </section>
    {{-- @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong>{{ session()->get('success') }}.
        </div>
    @endif
    @if($errors->any())
         @foreach ($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Success!</strong>{{ session()->get('success') }}.

            </div>
        @endforeach
    @endif --}}
    <section id="contact-info">
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
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-xl-9 col-lg-9 mx-auto">
                    <div class="row my-5">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 ci-hover">
                            <div class="row gx-1">
                                <div class="col-xxl-2 col-xl-3 col-lg-3">
                                    <div class="ct-icon">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                </div>
                                <div class="col-xxl-10 col-xl-9 col-lg-9">
                                    <h4>GENERAL ENQUIRIES</h4>
                                    <p>{{ $general->ginquire }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 ci-hover">
                            <div class="row gx-1">
                                <div class="col-xxl-2 col-xl-3 col-lg-3">
                                    <div class="ct-icon">
                                        <i class="fas fa-bullhorn"></i>
                                    </div>
                                </div>
                                <div class="col-xxl-10 col-xl-9 col-lg-9">
                                    <h4>MARKETING & PUBLIC RELATION</h4>
                                    <p>{{ $general->mpublic }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-5 row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 ci-hover">
                            <div class="row gx-1">
                                <div class="col-xxl-2 col-xl-3 col-lg-3">
                                    <div class="ct-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                </div>
                                <div class="col-xxl-10 col-xl-9 col-lg-9">
                                    <h4>BUSINESS & OPEN DAYS</h4>
                                    <p>{{ $general->bopen }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-4 col-sm-6 col-12 ci-hover">
                            <div class="row gx-1">
                                <div class="col-xxl-2 col-xl-3 col-lg-3">
                                    <div class="ct-icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-xxl-10 col-xl-9 col-lg-9">
                                    <h4>ADMINISTRATIVE DEVELOPMENT</h4>
                                    <p>{{ $general->adepartment }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="horizantal-line">
    </section>
    <section id="smc-info">
        <div class="container">
            <div class="row my-5">
                <div class="col-xxl-10 col-xl-10 col-lg-10 mx-auto">
                    <div class="row align-items-center">
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-6 col-12">
                            <h4>FOLLOW US ON SOCIAL MEDIA</h4>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                            <ul class="sci-icons">
                                <li>
                                    <a href="{{ $general->fb }}"><i class="fab fa-facebook-f "></i></a>
                                </li>
                                <li>
                                    <a href="{{ $general->tweeter }}"><i class="fab fa-twitter "></i></a>
                                </li>
                                <li>
                                    <a href="{{ $general->insta }}"><i class="fab fa-instagram "></i></a>
                                </li>
                                <li>
                                    <a href="{{ $general->tiktok }}"><i class="fab fa-tiktok"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <h4 class="text-end bordered-heading" style="color: #3e3d3d;font-weight: 400;"><span>/
                                    @SAINTVISAGE</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="horizantal-line">
        <div class="container">
            <div class="row my-5">
                <div class="col-xxl-10 col-xl-10 col-lg-10 mx-auto">
                    <div class="row align-items-center">
                        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-6 col-12">
                            <h4>QUESTIONS? CHAT TO US ON WHATSAPP 24/7
                            </h4>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 text-end smc-whtsapp">
                            <a href="#"><i class="fab fa-whatsapp"></i>{{ $general->whatsapp }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="git-form">
        <div class="container">
            <div class="row my-5">
                <div class="col-xxl-6 col-xl-6 col-lg-6 mx-auto custom-input-form">
                    <form action="{{route('send.contact')}}" method="post">
                        @csrf
                        <h5 class="text-center">GET IN TOUCH WITH US TODAY!</h5>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <select class="form-select" name="type" required>
                                        <option selected value="Mr">Mr</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Dr">Dr</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <input type="text" placeholder="fullname" class="form-control" name="name" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col-6">
                                <div class="input-group">
                                    <input type="text" name="email" placeholder="email address" class="form-control" required/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <input type="text" name="phone" placeholder="contact number" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <input type="number" name="zip" placeholder="postal code /po box" class="form-control" required/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <select class="form-select" name="country" required>
                                        <option selected value="united kingdom">united kingdom</option>
                                        <option value="span">spain</option>
                                        <option value="united arab emirates">united arab emirates</option>
                                        <option value="qatar">qatar</option>
                                        <option value="united states of america">united states of america</option>
                                        <option value="None">my country is not shown here</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-12">
                                <div class="input-group">
                                    <textarea rows="4" name="message" class="form-control" placeholder="reason for enquiry" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn yellow-btn text-white py-3 rounded-pill w-100">get in
                                    touch</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
<script type="text/javascript " src="{{ asset('assets/js/particles.js ') }}"></script>
@endsection
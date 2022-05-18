@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.3.13/slick.css" />
    <link rel="stylesheet" href="http://tekknox.com/assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="http://tekknox.com/assets/css/owl.theme.css" type="text/css">

@endsection
@section('main-contents')
    <section id="wwu-top-banner">
		 <div class="cth">
            <div class="container">
                <div class="row">
                    <div class="offset-3 col-6 d-flex justify-content-center text-center">
                        <div class="logo">
                            <img class="img-fluid" src="../assets/images/banner-logo.png" />
                            <p>services we offer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="common-top-header" style="background-size: cover;
    background-position: center center;">
            </div>
        </div>
        <div class="common-top-header-btns">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-9 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 mx-auto">
                        <div class="row gx-0">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <a href="#lead-link">purchase leads</a>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <a href="#consult-link">purchase consultaions</a>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <a href="#open-link">schedule open days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="www-sv">
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
                <div class="col-xl-10 col-xl-10 col-lg-10 mx-auto">
                    <h3 class="text-center"><strong>WHY WORK</strong> WITH SAINT VISAGE ?</h3>
                    <hr class="horizantal-line m-tb40">
                    @foreach($whys as $why)
                    <div class="row www-sv-inner">
                        <div class="col-12 text-center">
                            <div class="">
                                <img src="{{Storage::disk('public')->url($why->image)}}" />
                            </div>
                            <h3 class="bordered-heading"><span>{{$why->title}}</span></h3>
                            <p><b>{!! $why->description !!}</b></p>
                        </div>
                    </div>
                    @endforeach
                    <hr style="margin:70px 0px 50px 0px;" class="horizantal-line">
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-10 mx-auto text-center">
                    <h5>WE SUPPLY CLINICS WITH PRIVATE CASES. YOU INFORM US ON THE TREATMENTS YOU WISH TO INCREASE AND
                        WE WILL PROVIDE YOU WITH A <b>RAPID INCREASE OF NEW PATIENTS.</b> IT’S AS EASY AS THAT.</h5>
                    <button class="btn radius-none rounded-0 mt-5 yellow-btn" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><i class="far fa-comments" style="margin-right: 10px;"></i> arrange a chat</button>
                    <hr style="margin-top:60px" class="horizantal-line">

                </div>
            </div>
        </div>
    </section>
        <section id="rp-result">
        <div class="rp-result animation_background" id="particlesjs">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-10 col-xl-11 col-lg-11 col-md-12 mx-auto position-relative">
                        <div class="rp-slider-item text-center position-absolute">
                            <div class="slider-item-style">
                                <h5><b>REAL PRACTICE RESULTS:</b> OLD TOWN DENTAL CARE</h5>
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-11 col-sm-11 col-11 mx-auto">
                                        <div class="chart-box mt-0">
                                            <div class="chart">
                                                <div class="percentage" data-percent="90">
                                                    <span><sup>21</sup></span>
                                                </div>
                                            </div>
                                            <h6>INVISALIGN CONSULTATIONS IN THE 12 MONTHS BEFORE JOINING THE SAINT VISAGE NETWORK</h6>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-11 col-sm-11 col-11 mx-auto">
                                        <div class="chart-box">
                                            <div class="chart">
                                                <div class="percentage" data-percent="90">
                                                    <span><sup>97</sup></span>
                                                </div>
                                            </div>
                                            <h6>INVISALIGN CONSULTATIONS IN THE 12 MONTHS AFTER JOINING THE SAINT VISAGE NETWORK</h6>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-11 col-sm-11 col-11 mx-auto">
                                        <div class="chart-box">
                                            <div class="chart">
                                                <div class="percentage" data-percent="90">
                                                    <span><sup>462%</sup></span>
                                                </div>
                                            </div>
                                            <h6>INVISALIGN CONSULTATIONS GROWTH SINCE JOINING THE SAINT VISAGE NETWORK
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-11 mx-auto col-lg-12">
                                        <i>“WHEN WE FIRST STARTED DOING OUR INVISALIGN OPEN DAYS WITH SAINT VISAGE, PAYING
                                            £190 FOR EACH AND EVERY INVISALIGN PATIENT SOUNDED LIKE A LOT, BUT WHEN WE SAW
                                            THAT THEY ARE SENDING US 20 TO 30 PATIENTS EACH OPEN DAY, YOU REALISE THAT YOU
                                            ONLY NEED A COUPLE OF CONVERSIONS TO BREAK EVEN, EVERY CONVERSATION AFTER THAT
                                            IS PURE NET PROFIT.” </i>
                                        <small>- OLD TOWN DENTAL CARE</small>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-item-style">
                                <h5><b>REAL PRACTICE RESULTS:</b> BRIDGE ST DENTAL & AESTHETIC CLINIC</h5>
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-11 col-sm-11 col-11 mx-auto ">
                                        <div class="chart-box mt-0">
                                            <div class="chart">
                                                <div class="percentage" data-percent="25">
                                                    <span><sup>88</sup></span>
                                                </div>
                                            </div>
                                            <h6>FACIAL AESTHETIC CASES IN THE 12 MONTHS BEFORE JOINING THE SAINT VISAGE NETWORK
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-11 col-sm-11 col-11 mx-auto">
                                        <div class="chart-box">
                                            <div class="chart">
                                                <div class="percentage" data-percent="95">
                                                    <span><sup>242</sup></span>
                                                </div>
                                            </div>
                                            <h6>FACIAL AESTHEITC CASES IN THE 12 MONTHS AFTER JOINING THE SAINT VISAGE NETWORK
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-11 col-sm-11 col-11 mx-auto">
                                        <div class="chart-box">
                                            <div class="chart">
                                                <div class="percentage" data-percent="100">
                                                    <span><sup>175%</sup></span>
                                                </div>
                                            </div>
                                            <h6>FACIAL AESTHETIC CASE GROWTH SINCE JOINING THE SAINT VISAGE NETWORK
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-11 mx-auto col-lg-12">
                                        <i>“BRINGING IN NEW PATIENTS TO THE CLINIC FOR FILLERS AND BOTOX HAS ALWAYS BEEN
                                            CHALLENGING DUE TO THE QUALITY OF THEM. MANY ARE EITHER GHOST CALLS OR THEY BOOK AN
                                            APPOINTMENT AND THEN DON’T SHOW UP. WORKING WITH SAINT VISAGE MADE THIS MUCH EASIER
                                            AS THEY CALL THE PATIENTS FIRST AND CONVERSE WITH THEM ABOUT THE TREATMENT AND ONLY
                                            THEN IF THEY ARE INTERESTED DO THEY SELL US THAT LEAD. WE NOW HAVE FAR FEWER TIME
                                            WASTERS.”
                                        </i>
                                        <small>- BRIDGE ST DENTAL & AESTHETIC CLINIC
                                        </small>
                                    </div>
                                </div>

                            </div>
                            <div class="slider-item-style">
                                <h5><b>REAL PRACTICE RESULTS:</b> 3 steps smiles glassgow</h5>
                                <div class="row">
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-11 col-sm-11 col-11 mx-auto">
                                        <div class="chart-box mt-0">
                                            <div class="chart">
                                                <div class="percentage" data-percent="25">
                                                    <span><sup>102</sup></span>
                                                </div>
                                            </div>
                                            <h6>IMPLANTS LEADS IN THE 12 MONTHS BEFORE JOINING THE SAINT VISAGE NETWORK
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-11 col-sm-11 col-11 mx-auto">
                                        <div class="chart-box">
                                            <div class="chart">
                                                <div class="percentage" data-percent="95">
                                                    <span><sup>390</sup></span>
                                                </div>
                                            </div>
                                            <h6>IMPLANTS LEADS IN THE 12 MONTHS AFTER JOINING THE SAINT VISAGE NETWORK

                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-11 col-sm-11 col-11 mx-auto">
                                        <div class="chart-box">
                                            <div class="chart">
                                                <div class="percentage" data-percent="100">
                                                    <span><sup>282%</sup></span>
                                                </div>
                                            </div>
                                            <h6>IMPLANTS LEADS GROWTH SINCE JOINING THE SAINT VISAGE NETWORK

                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-11 mx-auto col-lg-12">
                                        <i>“AS AN IMPLANT CENTRE, WE HAVE WORKED WITH MANY DIFFERENT SERVICES THAT PROMISE TO
                                            DELIVER US PATIENTS EITHER IN THE FORM OF LEADS OR JUST GENERAL IN HOUSE MARKETING.
                                            THEY ALL SEEM TO OVER CHARGE AND UNDER DELIVER. WHAT WE LIKE ABOUT SAINT VISAGE IS
                                            THAT YOU WILL ONLY EVER PAY FOR WHAT YOU GET. WHEN WE BOOK OUR CONSULTATIONS, IF A
                                            PATIENT DOESN’T SHOW UP, WE WON’T GET CHARGED. IT IS THE FAIRNESS AND CONSISTENCY
                                            THAT MAKES THEM RELIABLE AND PROFITABLE TO WORK WITH.”      
                                        </i>
                                        <small>- 3 STEP SMILES GLASGOW       
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrange-chat-bg">
            <button class="btn radius-none rounded-0 yellow-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="far fa-comments" style="margin-right: 10px;"></i> arrange a chat</button>
        </div>
    </section>
    <section id="tl-details">
        <div class="container">
            <div class="row">
                <div class="col-xxl-10 col-xl-10 col-lg-11 col-md-12 col-sm-12 col-12 mx-auto">
                    <hr class="horizantal-line">
                    <div class="row py-5" id="lead-link">
                        <div class="col-6 d-flex align-items-center justify-content-center">
                            <h2>1</h2>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center">PURCHASE LEADS <br>(PRE EVALUATED AND HIGH QUALITY)</h3>
                            <hr class="horizantal-line">
                            <h5>WE FOCUS ON <b>QUALITY OVER QUANTITY.</b> WE UTILISE OUR MARKETING ALGORITHMS TO
                                GENERATE HIGH-QUALITY LEADS.<br><br> ONCE WE HAVE COMPILED A LIST, <b>WE REACH OUT TO
                                    EACH AND EVERY PATIENT</b> TO EVALUATE THEIR INTEREST.<br><br> ONLY THEN, DO WE
                                REFER THESE PATIENTS TO CLINICS WITHIN OUR NETWORK.</h5>
                        </div>
                    </div>
                    <hr class="horizantal-line">
                    <div class="row py-5 flex-row-reverse" id="consult-link">
                        <div class="col-6 d-flex align-items-center justify-content-center">
                            <h2>2</h2>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center">PURCHASE CONSULTATIONS <br>(WE WILL ARRANGE THEM)</h3>
                            <hr class="horizantal-line">
                            <h5>WE WILL GENERATE THE LEADS, CONVERT THEM, AND BOOK THEIR CONSULTATIONS AT YOUR CLINIC.
                                JUST LET US KNOW THE TREATMENT AND SCHEDULED TIME FRAME AND THEN LEAVE THE REST TO
                                US.<br><br> WE WILL ONLY CHARGE FOR THE PATIENTS THAT
                                ATTEND THEIR CONSULTATIONS.</h5>
                        </div>
                    </div>
                    <hr class="horizantal-line">
                    <div class="row py-5" id="open-link">
                        <div class="col-6 d-flex align-items-center justify-content-center">
                            <h2>3</h2>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center">SCHEDULE OPEN DAYS <br>(FULL DAY OF CONSULTATIONS)</h3>
                            <hr class="horizantal-line">
                            <h5>WE DO ABSOLUTELY EVERYTHING; OUR COMPLICATED ALGORITHMS WILL GENERATE THE LEADS, OUR
                                TALENTED COORDINATORS WILL REACH OUT AND IDENTIFY THE POTENTIAL PATIENTS AND OUR
                                EXPERIENCED DOCTORS WILL EVALUATE THEIR SUITABILITY FOR THE
                                TREATMENT(S) AND ANSWER ALL THEIR CLINICAL QUESTIONS.<br><br> WE WILL THEN BOOK THEIR
                                CONSULTATIONS ON A PRIOR AGREED DATE AND OUR MANAGEMENT WILL OFFER YOU OUR EXPERTISE TO
                                ENSURE YOU CONVERT AS MANY CONSULTATIONS INTO
                                CASES AS YOU CAN.<br><br>WE CHARGE A FIXED PRICE ONLY FOR THOSE PATIENTS THAT ATTEND
                                THEIR CONSULTATION.</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
        <!-------------------------MODAL POPUP---------------------->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" style="max-width: 900px;">
            <div class="modal-content" id="ac-modal">
                <div class="d-flex justify-content-end mt-2 mr-3">
                    <button type="button" class="mc-btn" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times"></i></button>
                </div>
                <div class="modal-body custom-input-form custom-mf">
                    <h4 class="text-center bordered-heading"><span>REQUEST A CALL BACK FROM A BUSINESS
                            COORDINATOR:</span></h4>
                    <form action="{{route('send.contact')}}" method="post">
                        @csrf
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
                                <input type="text" placeholder="fullname"  class="form-control" name="name" required/>
                            </div>
                        </div>
                    </div>
                    <div class="row py-3">
                        <div class="col-6">
                            <div class="input-group">
                                <input type="text" name="email" placeholder="email address" class="form-control" required />
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
                                <input type="text" placeholder="PRACTICE name" class="form-control" name="message"/>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group">
                                <input type="text" name="zip" placeholder="postal code /po box" class="form-control" required/>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12">
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
                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
                                <label class="form-check-label" for="defaultCheck1">
                                    I AGREE THAT SAINT VISAGE CAN CONTACT ME USING MY PERSONAL DATA TO INFORM ME OF
                                    TREATMENTS OR SERVICES THAT MAY BE OF INTEREST.
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn gray-btn py-3 fos15 rounded-pill w-100">request a call
                                back</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <div></div>
@endsection
@section('js')
<script type="text/javascript " src="{{ asset('assets/js/particles.js ') }}"></script>
    <script type="text/javascript" src="../assets/js/jquery.easypiechart.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

@endsection
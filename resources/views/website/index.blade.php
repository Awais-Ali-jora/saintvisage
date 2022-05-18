@extends('layouts.app')
    @section('main-contents')
    <div class="banner-wrapper" style="background-image: url({{Storage::disk('public')->url($banner->image)}});">
        <div class="container">
            <div class="banner-inner">
                <div class="d-flex align-items-center justify-content-center">
                    <img src="{{asset('assets/images/banner-logo.png')}}">
                </div>
				<div class="row">
                    <div class="col-lg-10 mx-auto">
					<div class="banner-actions">
						<div class="row g-2">
							  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

								                                      <a href="{{route('posts',1)}}">
                                        <span>
                                            Treaments 
                                        </span>
                                        <i class="fas fa-list"></i>
                                    </a>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                            
							<a href="{{route('contact')}}" class="bg-skin">
                                        <span>
                                            Contact us
                                        </span>
                                        <i class="fas fa-comment"></i>
                                    </a>
                        </div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-10 mx-auto">
                                    <a href="/pages/work-with-us.html" class="bg-purple">
                                        <span>
                                            Work with us
                                        </span>
                                        <i class="fas fa-handshake"></i>
                                    </a>
                                </div>
                       
						</div>
                </div>
					</div>
				</div>
                
            </div>
        </div>
    </div>
    <div class="banner-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-lg-10 col-md-12 col-sm-12 col-12 mx-auto">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-5 mb-lg-0 bb-left text-center">
                            <h5>NEW SV DRIP<span> ® IV VITAMIN THERAPY</span><span>COMING SOON AT SAINT VISAGE</span>
                            </h5>
                            <a href="{{route('post.detail',2)}}">find our more<span class="material-icons">arrow_right_alt</span></a>
                        </div>
                        <div class="col-12 col-md-6 bb-right text-center">
                            <h5>NEW SV IMPANTS<span> ®ZIRCONIUM DENTAL IMPLANTS</span><span>NOW AVAILABLE AT SAINT
                                    VISAGE</span></h5>
                            <a href="{{route('post.detail',3)}}">find our more<span class="material-icons">arrow_right_alt</span></a>
                        </div>
                    </div>
                </div>
            </div>
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

    <!--********************************About Section**************************************-->
    <section id="lp-about">
        <div class="container">
            <h4 class="bordered-heading text-dark"><span>ABOUT SAINT VISAGE</span></h4>
            <p class="text-justify">{!! $about->about !!}
            </p>
            <div class="row lpa">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-7 col-12 mx-auto">
                    
					                    <a class="rm-btn-wi yellow-btn py-3" href="{{route('about')}}">

                   
                        read more
                        <i class="fas fa-mouse-pointer"> 
                        </i>
                    </a>

                </div>
            </div>
            <div class="lp-about-cards">
                <div class="row ">
                    <div class="col-xxl-9 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-9 mx-auto">
                        <div class="row gx-lg-5 gx-md-3">
                            @foreach($clinics as $clinic)
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-6 offset-col-4 col-8 mx-auto">
								<a href="#">
									<div class="lp-card-item">
                                    <div class="lp-c-item-top">
                                        <img src="{{Storage::disk('public')->url($clinic->image)}}" />
										<div class="lp-overaly-effect">
                                            </div>
										
                                    </div>
                                    <div class="lp-c-item-bottom">
                                        <h5>{{$clinic->title}}</h5>
                                        <p>{{$clinic->description}}</p>
                                    </div>
                                </div>
								</a>
                                
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section id="sv-implementation">
        <div class="sv-top-info text-center">
            <h3>SV IMPLANTS ®</h3>
            <h5>THE ULTIMATE SOLUTION TO MISSING TEETH</h5>
            <h3>WE PLAN. WE SCAN. WE NAVIGATE.</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="mx-auto col-xxl-8 col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12">
                    <div class="sv-bottom-info">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="p-5 pt-0 border border-1">
                                            <div class="sv-info-card">
                                                <h5><img src="assets/images/tic-2.svg" /> ZIRCONIUM POSTS</h5>
                                                <div class="sv-card-hidden-info">
                                                    <p>ZIRCONIUM POSTS ARE PURE WHITE MAKING THEM INDISTINGUISHABLE FROM NATURAL TEETH AND THEREFORE THE OPTIMAL CHOICE FOR THOSE WISHING TO HAVE A FUNCTIONAL YET AESTHETIC END RESULT.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="p-5 pt-0 border border-1">
                                            <div class="sv-info-card">
                                                <h5><img src="assets/images/fic-1.svg" />FINANCE AVAILABLE</h5>
                                                <div class="sv-card-hidden-info">
                                                    <p>YOU CAN CREATE YOUR OWN UNIQUE PAYMENT PLAN. WE ARE VERY FLEXIBLE WITH OUR PAYMENT OPTIONS AND WE OFFER ZERO PERCENT INTEREST, GET IN TOUCH TODAY TO SEE WHAT WE CAN DO FOR YOU.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="p-5 pt-0 border border-1">
                                            <div class="sv-info-card">
                                                <h5><img src="assets/images/pic-4.svg" /> NAVIGATED SURGERY</h5>
                                                <div class="sv-card-hidden-info">
                                                    <p>WE ENSURE ALL OUR SKILFUL SURGEONS UTILISE THE LATEST TECHNOLOGY AVAILABLE TO MAXIMISE PRECISION AND MINIMISE RISK. THIS GUARANTEES SUPERIOR RESULTS IN A FRACTION OF THE USUAL TIME.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="p-5 pt-0 border border-1">
                                            <div class="sv-info-card">
                                                <h5> <img src="assets/images/hic-3.svg" /> LIFETIME AFTERCARE</h5>
                                                <div class="sv-card-hidden-info">
                                                    <p>WE OFFER LIFETIME AFTERCARE WITH ALL OUR IMPLANTS. ALL PATIENTS ARE PROVIDED DETAILED RECOVERY INFORMATION AND SCHEDULED FOLLOW UP APPOINTMENTS TO KEEP THEIR NEW SMILE ON TRACK.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="sv-implementation-banner">
            <div class="logo">
                <img class="img-fluid" src="assets/images/banner-logo.png" />
            </div>
            <a href="#" class="rm-btn-wi yellow-btn">
                Download our INFORMATION pack
                <i class="fas fa-mouse-pointer"> 
                </i>
            </a>
        </div>
    </section>
    <!--********************************SV  TREATMENTS**************************************-->
    <section id="sv-treatments">
        <h3 class="font-weight-900">SV treaments</h3>
        <div class="treatement-wrapper">
            <div class="row gx-0">
                @foreach($svs as $sv)
                <div class="offset-col-4 col-8 col-sm-6 col-md-4 col-lg-3 mx-auto">
					<a href="#">
						<div class="treatment-item-wrapper">
							<div class="treat-item treat-bg-one" style="background:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url({{Storage::disk('public')->url($sv->image)}});background-size: cover;
    background-position: center center; ">
								<h4>{{$sv->title}}</h4>
								<div class="treat-item-hover-effect">
									<div class="inner-hover">
										<h5>{{$sv->title}}</h5>
										<p>{{$sv->description}}</p>
									</div>
								</div>
							</div>
						</div>
					</a>
                    
                </div>
                @endforeach
            </div>
        </div>
        <div class="treatment-video-wrapper">
            <div class="video-overlay">
                <div class="container">
                    <div class="row">
                        <div class="mx-auto col-xxl-10 col-xl-10 col-lg-11 col-md-12 col-sm-12 col-12">
                            <h4 class="bordered-heading"><span>CHOOSE SAINT VISAGE FOR INVISALIGN</span> </h4>
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="v-overlay-left">
                                        <div class="row">
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-2 col-12">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/teeth-01.svg')}}" />
                                                </div>
                                            </div>
                                            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-9 col-sm-10">
                                                <h6>FREE SMILE SIMULATION</h6>
                                                <p>DURING YOUR FREE INVISALIGN CONSULTATION, WE WILL USE A 3D SCANNER TO
                                                    CAPTURE YOUR CURRENT SMILE AND FORMULATE A UNIQUE TIMELINE, WEEK BY
                                                    WEEK, DEMONSTRATING WHAT THE TRANSITION OF YOUR SMILE WOULD LOOK
                                                    LIKE IF YOU DECIDED TO GO AHEAD WITH US. SIMPLY PUT, THIS WILL ALLOW
                                                    YOU TO SEE WHAT THE RESULTS OF YOUR TREATMENT WOULD LOOK LIKE BEFORE
                                                    YOU EVEN STARTED. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="v-overlay-left">
                                        <div class="row">
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-2 col-12">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/experience provider-01.svg')}}" />
                                                </div>
                                            </div>
                                            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-9 col-sm-10">
                                                <h6>EXPERIENCED PROVIDERS</h6>
                                                <p>WHEN YOU CHOOSE TO PURSUE YOUR INVISALIGN TREATMENT THROUGH US, YOU
                                                    HAVE AUTOMATICALLY ASSOCIATED YOURSELF WITH THE MOST EXPERIENCED
                                                    INVISALIGN PROVIDERS I.E. DIAMOND AND PLATINUM PROVIDERS ALIKE. THIS
                                                    EXTENDS
                                                    OUR CAPABILITIES, MEANING WE CAN TREAT A WIDER VARIETY OF
                                                    ORTHODONTIC CASES, INCLUDING MUCH MORE COMPLICATED CASES WITH FAR
                                                    MORE CONFIDENCE.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="v-overlay-left">
                                        <div class="row">
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-2 col-12">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/technology-01.svg')}}" />
                                                </div>
                                            </div>
                                            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-9 col-sm-10">
                                                <h6>TECHNOLOGY</h6>
                                                <p>UNLIKE MOST PRACTICES THAT FORMULATE TREATMENT PLANS USING SIMPLE
                                                    PHOTOGRAPHS AND TRADITIONAL IMPRESSIONS WITH ALGINATE, WE HAVE
                                                    INVESTED COUNTLESS RESOURCES IN THE LATEST TECHNOLOGICAL
                                                    ADVANCEMENTS AVAILABLE.
                                                    THIS ADVANTAGE ALLOWS US TO CAPTURE YOUR SMILE IN 3D WITH GREAT
                                                    ANATOMICAL DETAIL ALLOWING US TO MAKE MORE PRECISE AND ACCURATE
                                                    TRAYS WHICH ULTIMATELY LEADS TO MORE EFFECTIVE RESULTS. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="v-overlay-left">
                                        <div class="row">
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-2 col-12">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/finance-01.svg')}}" />
                                                </div>
                                            </div>
                                            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-9 col-sm-10">
                                                <h6>0% FINANCE AVAILABLE</h6>
                                                <p>IN REGARDS TO FINANCING THE TREATMENT, WE ALLOW OUR PATIENTS THE
                                                    ABILITY TO CREATE THEIR OWN UNIQUE PAYMENT PLANS ENSURING MAXIMUM
                                                    FINANCIAL CONVENIENCE. WE ARE VERY FLEXIBLE WITH OUR PAYMENT OPTIONS
                                                    AND
                                                    WE EVEN OFFER ZERO PERCENT INTEREST WITHIN THE FIRST 12 MONTHS. WE
                                                    CAN ALSO CREATE PAYMENT PLANS OVER A LONGER PERIOD OF TIME WITH LOW
                                                    INTEREST RATES.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="v-overlay-left">
                                        <div class="row">
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-2 col-12">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/aftercare-01.svg')}}" />
                                                </div>
                                            </div>
                                            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-9 col-sm-10">
                                                <h6>AFTER CARE</h6>
                                                <p>WE TAKE PRIDE IN THE FULL SUPPORT WE OFFER OUR PATIENTS TO HELP
                                                    MAINTAIN THEIR NEW SMILE. WE SCHEDULE FOLLOW UP APPOINTMENTS TO MAKE
                                                    SURE THERE ARE NO ISSUES OR ANY CONCERNS. SHOULD ANY QUESTIONS OR
                                                    DOUBTS
                                                    ARISE, WE HAVE AN ONLINE DEDICATED TEAM READY TO OFFER OUR FULL
                                                    ADVICE DAY AND NIGHT. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="v-overlay-left">
                                        <div class="row">
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-2 col-12">
                                                <div class="img">
                                                    <img src="{{asset('assets/images/vivera-01.svg')}}" />
                                                </div>
                                            </div>
                                            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-9 col-sm-10">
                                                <h6>VIVERA RETAINERS</h6>
                                                <p>ONCE THE TREATMENT IS COMPLETE, WE OFFER ALL OUR PATIENTS A PAIR OF
                                                    VIVERA RETAINERS. THESE RETAINERS ARE CREATED BY INVISALIGN
                                                    THEMSELVES USING ONLY THE HIGHEST QUALITY MATERIALS AVAILABLE. THEY
                                                    ARE SMARTLY
                                                    PRODUCED USING THE DESIGN OF YOUR FINAL TRAY ENSURING A LIFETIMES
                                                    WORTH OF MAINTENANCE FOR YOUR PERFECT SMILE.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-sm-2 mt-md-5">

                                <a href="/pages/invisalign-details.html" class="yellow-btn text-center">find out
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <iframe
                src="https://www.youtube.com/embed/FhdhIB7bgIM?&loop=1&controls=0&autoplay=1&mute=1&showinfo=0&playlist=FhdhIB7bgIM"></iframe>
        </div>
    </section>
    <!--********************************SV  TREATMENTS**************************************-->
    <div id="instagram">
        
    </div>
    <!--********************************WORK WITH US**************************************-->
    <section id="work-with-us">
        <div class="container">
            <div class="row">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 mx-auto">
                    <div class="row align-items-center mb-5 mb-md-0">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-center">
                            <h2>{{$general->network_title}}</h2>
                           <a href="{{route('work')}}" class="yellow-btn">work with us</a>
                        </div>
						
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-none d-md-flex justify-content-end">
                            <div class="logo-wwu">
                                <img class="img-fluid" src="{{Storage::disk('public')->url($general->network_image)}}" />
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-10 col-xl-10 col-lg-8 col-md-12 col-sm-12 col-12 mx-auto">
                    <div class="row about-dr">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-center">
                                <img src="{{asset('assets/images/dr-crooke.png')}}">
                                <strong class="d-block">DR EDUARDO CROOKE</strong>
                                <span class="text-light-gray">IMPLANTOLOGIST</span>
                                <p class="text-light-gray">“AT SAINT VISAGE ALL OUR MEMBERS ARE CONTINUOUSLY KEPT UP TO
                                    DATE WITH THE
                                    LATEST,
                                    MOST EFFECTIVE AND ADVANCED METHODS OR TECHNIQUES USED TO ACHIEVE THE HIGHEST
                                    QUALITY RESULTS.”
                                </p>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-center">
                                <img src="{{asset('assets/images/dr-sara.png')}}">

                                <strong class="d-block">DR SARA BEYLIK</strong>
                                <span class="text-light-gray">FACIAL MEDICINE</span>
                                <p class="text-light-gray">“WE STRIVE TO ACHIEVE BALANCE, HARMONY AND SYMMETRY FOR
                                    OPTIMAL RESULTS TO ENHANCE
                                    OUR
                                    PATIENTS NATURAL BEAUTY BY WORKING WITH THEIR FEATURES AS OPPOSED TO CONCEALING
                                    THEM.”
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="brand-partners">
                        @foreach($partners as $partner)
                        <div class="brand-logo">
                            <img src="{{Storage::disk('public')->url($partner->image)}}" />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--********************************FOOTER**************************************-->
    @endsection
    @section('js')
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript " src="{{ asset('assets/js/particles.js ') }}"></script> -->
    <script>
		$(document).ready(function() {
        var url = "{{route('instagram')}}";
			$('#instagram').html('<i class="fa fa-spinner" aria-hidden="true"></i>');
        $.ajax({
            url: url,
            type: "get",
            cache: false,
            success: function(dataResult){
                console.log(dataResult);
				$('#instagram').html('');
				document.querySelector("#instagram").innerHTML=dataResult;
				
				
            }
        })
		})
    </script>
@endsection
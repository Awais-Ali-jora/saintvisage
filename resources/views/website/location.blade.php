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

    <section id="loc-header">
       

        <div class="common-top-header-l">
        </div>
        </div>
        <div class="loc-wrapper">
            <div class="container">
                <div class="row">
                <div class="col-xxl-10 col-xl-10 text-center mx-auto">
                        <h3 class="bordered-heading"><span>saint visage locations</span></h3>
                        <p style="margin-top: 30px;">sAINT VISAGE NOW OFFERS ITS SERVICES IN MULTIPLE LOCATIONS ACROSS
                            SEVERAL COUNTRIES.<br>
                            TO FIND YOUR NEAREST SV PROVIDER, SEARCH YOUR AREA BELOW OR CONTACT US.
                        </p>
                        <div class="row" id="loc-accrodion">
                          @foreach($continents as $continent)
                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                <h4 class="">{{ $continent->name }}</h4>
                                @foreach ($continent->countries as $country)
                                  @foreach($locations as$loc)
                                    @if($loc->country_id == $country->id)
                                      <h4 class="yellow-bg" style="font-weight:300;margin-bottom: 10px;">{{$country->name}}</h4>
                                        @foreach ($country->cities as $city)
                                          @if(count($city->locations) >0 )
                                            <div class="accordion accordion-flush" id="{{ $city->id }}">
                                              <div class="accordion-item" style="margin-bottom:10px">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                  <button class="accordion-button collapsed" type="button"
                                                  data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{ $city->id }}"
                                                  aria-expanded="false" aria-controls="flush-collapseOne{{ $city->id }}">
                                                  {{ $city->name }}
                                                  </button>
                                                </h2>
                                                <div id="flush-collapseOne{{ $city->id }}" class="accordion-collapse collapse"
                                                  aria-labelledby="flush-headingOne" data-bs-parent="#{{ $city->id  }}">
                                                  <div class="accordion-body">
                                                    @foreach ($city->locations as $shop)
                                                      <div class="c-info-wrapper">
                                                        <p>{{ $shop->title }}</p>
                                                        <div class="row c-info">
                                                          <div class="col-xxl-1">
                                                            <span><i class="fas fa-address-book"></i></span>
                                                          </div>
                                                          <div class="col-xxl-11">
                                                            <small>{{ $shop->address }}</small>
                                                          </div>
                                                        </div>
                                                        <div class="row c-info">
                                                          <div class="col-xxl-1">
                                                              <span><i class="fas fas fa-phone-volume"></i></span>
                                                          </div>
                                                          <div class="col-xxl-11">
                                                              <small>{{ $shop->phone }}</small>
                                                          </div>
                                                      </div>
                                                      <div class="row c-info">
                                                          <div class="col-xxl-1">
                                                              <span><i class="fas fas fa-envelope"></i></span>
                                                          </div>
                                                          <div class="col-xxl-11">
                                                              <small>{{ $shop->email }}</small>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    @endforeach
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          @endif
                                        @endforeach
                                      @break
                                    @endif
                                  @endforeach
                                @endforeach
                              </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              @endsection
@section('js')
<script type="text/javascript " src="{{ asset('assets/js/particles.js ') }}"></script>
@endsection
<section id="instagram-posts" style="min-height:600px">
        <h4 class="bordered-heading text-dark">
            <span>SAINT VISAGE INSTAGRAM</span>
        </h4>
        <div class="container">
            <div class="row gx-0">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12 mx-auto">
                    <div class="row gx-0">                        
                        @foreach($data->data as $key=>$data)
							@if($key < 6)
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mx-auto">
                                <div class="insta-post-parent">
                                        <div class="insta-post-child treat-bg-two">
                                            	<img class="img-responsive" src="{{$data->media_url}}" alt="" height="100%">
                                        </div>
                                </div>
                            </div>
						@endif
                        @endforeach
						
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="#" class="yellow-btn">Follow @ Saint Visage</a>
            </div>
        </div>
    </section>
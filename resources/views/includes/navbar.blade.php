<!--<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light navbar-default">
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/images/logo.jpg')}}"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{route('about')}}">ABOUT</a>
                        </li>
                        <li class="nav-item inner-nav-parent">
                            <a class="nav-link" href="#">
                                TREATMENTS
                            </a>
                            <ul id="inner-list">
                                @foreach($treatments as $treatment)
                                <li>
                                    <a href="{{route('posts',$treatment->id)}}">{{$treatment->title}}</a>
                                </li>
                                @endforeach
                            </ul>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('work')}}">WORK WITH US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('location')}}">LOCATIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>-->
            <nav class="navbar fixed-top  navbar-expand-lg navbar-light navbar-default">
                <div class="container">
                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/images/logo.jpg')}}"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="{{route('about')}}">ABOUT</a>
                            </li>
                            <li class="nav-item inner-nav-parent">
                                <a class="nav-link" href="#">
                                    TREATMENTS
                                </a>
                                <ul id="inner-list">
                                    @foreach($treatments as $treatment)
                                    <li>
                                        <a href="{{route('posts',$treatment->id)}}">{{$treatment->title}}</a>
                                    </li>
                                    @endforeach
                                </ul>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('work')}}">WORK WITH US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('location')}}">LOCATIONS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

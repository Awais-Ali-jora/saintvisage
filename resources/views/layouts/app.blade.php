<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('includes.head')
</head>

<body>
    <div class="main-navigation" id="main-navbar">
        @include('includes.navbar')
    </div>
    
        @yield('main-contents')
    
    
    <section id="footer">
        <footer>
            <div class="container">
                <div class="row align-items-center mt-3">
                    <div class="col-xxl-4 col-xl-4 col-12 col-lg-4 col-md-4 col-sm-6 mx-auto">
                        <div class="footer-logo">
                            <img src="{{asset('assets/images/logo.jpg')}}" />
                        </div>
                        <div class="footer-social-icons">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-12 col-lg-4 col-md-4 col-sm-6 mx-auto">
                        <div class="footer-nav-links">
                            <div class="row align-items-md-center align-items-start">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-6 col-6">
                                    <ul>
                                        <li>
                                            <a href="{{route('about')}}">about</a>
                                        </li>
                                        <li>
                                            <a href="{{route('location')}}">location</a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}">contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-6 col-6">
                                    <ul>
                                        <li>
                                            <a href="{{route('posts',1)}}">dental clinic</a>
                                        </li>
                                        <li>
                                            <a href="{{route('posts',2)}}">facial clinic</a>
                                        </li>
                                        <li>
                                            <a href="">privacy policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-12 col-lg-4 col-md-4 col-sm-12 mt-sm-4 mt-0 mx-auto">
                        <form action="{{route('newsletter.add')}}" method="post">
                            @csrf
                        <strong class="mb-3 d-block">SUBSCRIBE TO OUR NEWSLETTER</strong>
                        <div class="form-group  mb-3">
                            <select class="form-select text-uppercase fos13" name="country">
                                <option selected>United kingdom</option>
                                <option value="germany">germany</option>
                                <option value="canada">canada</option>
                                <option value="france">france</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" />
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn-block">Signup</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p class="p-2 text-white fos13 mt-4" style="background: #000;">© 2021 SAINT VISAGE - ALL RIGHTS RESERVED
                </p>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
            <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
            @section('js')
            @show
            <script src="{{asset('assets/js/custom.js')}}"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                @if(session()->has('success'))
                    swal("Good job!", "{{session()->get('success')}}", "success");
                @endif
                @if($errors->any())
                var html=``;
                    @foreach ($errors->all() as $error)
                        html+='{{$error}}'
                    @endforeach
                    swal('error',html,{
                        dangerMode: true,
                        buttons: true,
                    });
                @endif
                
            </script>
        </footer>
    </section>
</body>
</html>

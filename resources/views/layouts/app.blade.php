<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Freight Transportation Category Bootstrap Responsive Web Template | Home :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="keywords" content="Freight Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->
     @yield('styles')
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- //Web-Fonts -->
</head>

<body>
<!-- header -->
<header id="home">
    <div class="container">
        <div class="header d-lg-flex justify-content-between align-items-center py-sm-3 py-2 px-sm-2 px-1">
            <!-- logo -->
            <div id="logo">
                <h1><a href="index.html">Freight</a></h1>
            </div>
            <!-- //logo -->
            <!-- nav -->
            <div class="nav_w3ls ml-lg-5">
                <nav>
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                            </label>
                            <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul>
                                <li><a href="#blog" class="drop-text">Blog</a></li>
                                <li><a href="single.html" class="drop-text">Single Page</a></li>
                                <li><a href="#services" class="drop-text">Services</a></li>
                                <li><a href="#more" class="drop-text">More</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li class="ml-xl-5 ml-lg-2 mt-lg-0 mt-sm-4 mt-3">
                            @guest
                            <a href="{{route('login')}}" class="reqe-button text-uppercase">Login</a>
                            <a href="{{route('home.registrationForm')}}" class="reqe-button text-uppercase">Register</a>
                            @else
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-3" class="toggle toogle-2">{{Auth::User()->name}} <span class="fa fa-angle-down" aria-hidden="true"></span>
                                </label>
                                <a href="#">{{Auth::User()->name}} <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-3" />
                                <ul>
                                    <li><a href="{{route('user.dashboard')}}" class="drop-text"><i class="fas fa-tachometer-alt">Dashboard</a></li>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{csrf_field()}}
                                    </form>
                                    <li><a href="{{ url('/logout') }}" class="drop-text" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-lock"></i>Logout</a></li>
                                </ul>
                            </li>
                            @endguest
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- //nav -->
        </div>
    </div>
</header>
<!-- //header -->
@yield('content')
<!-- footer -->
<footer class="footer py-md-5 pt-md-3 pb-sm-5">
    <div class="container">
        <div class="row p-sm-4 px-3 py-3">
            <div class="col-lg-4 footer-top mt-md-0 mt-sm-5">
                <h2>
                    <a class="navbar-brand" href="index.html">
                        Freight
                    </a>
                </h2>
                <div class="fv3-contact mt-2">
                    <p>
                        <a href="mailto:example@email.com">info@example.com</a>
                    </p>
                </div>
                <div class="fv3-contact my-2">
                    <p>+456 123 7890</p>
                </div>
                <div class="fv3-contact">
                    <p>+90 nsequursu dsdesdc,
                        <br>xxx Street State 34789.</p>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 mt-lg-0 mt-4">
                <div class="footerv2-w3ls">
                    <h3 class="mb-3 w3f_title">Navigation</h3>
                    <hr>
                    <ul class="list-w3pvtits">
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="about.html">
                                About Us
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="portfolio.html">
                                Portfolio
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="single.html">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="contact.html">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 mt-lg-0 mt-4">
                <div class="footerv2-w3ls">
                    <h3 class="mb-3 w3f_title">Links</h3>
                    <hr>
                    <ul class="list-w3pvtits">
                        <li>
                            <a href="about.html">
                                Our Mission
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="single.html">
                                Latest posts
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="portfolio.html">
                                Explore
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="contact.html">
                                Find us
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mt-lg-0 mt-4">
                <div class="footerv2-w3ls">
                    <h3 class="mb-3 w3f_title">Links</h3>
                    <hr>
                    <ul class="list-w3pvtits">
                        <li>
                            <a href="single.html">
                                more
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="portfolio.html">
                                our work
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="about.html">
                                Explore
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="contact.html">
                                contact us
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                references
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 mt-lg-0 mt-4">
                <div class="footerv2-w3ls">
                    <h3 class="mb-3 w3f_title">Links</h3>
                    <hr>
                    <ul class="list-w3pvtits">
                        <li class="my-2">
                            <a href="portfolio.html">
                                Explore
                            </a>
                        </li>
                        <li>
                            <a href="about.html">
                                Our Mission
                            </a>
                        </li>
                        <li class="my-2">
                            <a href="single.html">
                                Latest posts
                            </a>
                        </li>

                        <li class="mb-2">
                            <a href="contact.html">
                                Find us
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- //footer bottom -->
</footer>
<!-- //footer -->
<!-- copyright -->
<div class="cpy-right text-center bg-theme">
    <p class="text-wh">© 2019 Freight. All rights reserved | Design by
        <a href="http://w3layouts.com"> W3layouts.</a>
    </p>
</div>
<!-- //copyright -->
<!-- move top icon -->
<a href="#home" class="move-top text-center">
    <span class="fa fa-level-up" aria-hidden="true"></span>
</a>
<!-- //move top icon -->

<!-- Js goes Here -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@yield('scripts')
<script src="{{asset('js/app.js')}}" type="application/javascript"></script>
</body>

</html>
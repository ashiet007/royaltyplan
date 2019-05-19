@extends('layouts.app')
@section('content')
<!-- banner -->
<section class="banner">
    <!-- banner text -->
    <div class="container">
        <div class="banner_text_wthree_pvt">
            <h3 class="home-banner-w3">World Wide <br>Transportation</h3>
            <p class="bnr-txt">Lorem ipsum dolor sit amet,Stet clita kasd gubergren, Lorem ipsum dolor sit
                amet,Stet clita kasd gubergren,
            </p>
            <form action="#" method="post" class="d-flex serching-styles-w3pvt">
                <input type="search" class="serach-input" placeholder="Enter Your Track Id" name="search" required>
                <button class="btn bg-theme button-w3" type="button">Track Now</button>
            </form>
        </div>
    </div>
    <!-- //banner text -->
    <!-- banner-bottom -->
    <div class="banner-bottom-w3ls">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-6">
                    <div class="bb-img">
                        <img src="images/a2.jpg" class="img-fluid img-thumbnail" alt="" />
                        <h3>caption goes here</h3>
                    </div>
                </div>
                <div class="col-sm-4 col-6">
                    <div class="bb-img">
                        <img src="images/a1.jpg" class="img-fluid img-thumbnail" alt="" />
                        <h3>caption goes here</h3>
                    </div>
                </div>
                <div class="col-sm-4 col-6 mx-auto mt-sm-0 mt-4">
                    <div class="bb-img">
                        <img src="images/a3.jpg" class="img-fluid img-thumbnail" alt="" />
                        <h3>caption goes here</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner-bottom -->
</section>
<!-- //banner -->

<!-- about-->
<section class="single_grid_w3_main align-w3-abt" id="about">
    <div class="container">
        <div class="wthree_pvt_title text-center">
            <h4 class="w3pvt-title">What we Offer</h4>
            <p class="sub-title">Subheadings stand out because they are like mini titles. They make your post stand
                out and
                make it more readable.</p>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="abt-grid">
                    <div class="row">
                        <div class="col-3">
                            <div class="abt-icon">
                                <span class="fa fa-subway"></span>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="abt-txt">
                                <h4>takimata sanctus</h4>
                                <p>Lo sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-lg-0 my-4">
                <div class="abt-grid">
                    <div class="row">
                        <div class="col-3">
                            <div class="abt-icon">
                                <span class="fa fa-ship"></span>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="abt-txt">
                                <h4>takimata sanctus</h4>
                                <p>Lo sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="abt-grid">
                    <div class="row">
                        <div class="col-3">
                            <div class="abt-icon">
                                <span class="fa fa-plane"></span>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="abt-txt">
                                <h4>takimata sanctus</h4>
                                <p>Lo sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="about.html" class="btn w3ls-btn">view more</a>
        </div>
    </div>
</section>
<!-- //about -->

<!-- services -->
<section class="bg-services position-relative align-w3" id="services">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="services-bg-color">
                    <div class="wthree_pvt_title mb-3">
                        <h4 class="w3pvt-title w3pvt-titl-sec text-wh">what we provide
                        </h4>
                        <span class="sub-title text-li">add your caption here</span>
                    </div>
                    <div class="row">
                        <div class="col-md-6 service-title my-4">
                            <h4 class="home-title text-theme">Sub heading</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur yua.
                            </p>
                        </div>
                        <div class="col-md-6 service-title my-md-4">
                            <h4 class="home-title text-theme">Sub heading</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur ap.
                            </p>
                        </div>
                        <div class="col-md-6 service-title mt-4">
                            <h4 class="home-title text-theme">Sub heading</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur ar.
                            </p>
                        </div>
                        <div class="col-md-6 service-title mt-4">
                            <h4 class="home-title text-theme">Sub heading</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur as.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <a href="about.html" class="btn w3ls-btn">view more</a>
                    </div>
                </div>

            </div>
            <div class="offset-lg-2"></div>
        </div>
    </div>
</section>
<!-- //services -->

<!-- portfolio -->
<section class="portfolio-wthree align-w3 py-5" id="portfolio">
    <div class="container py-xl-5 py-lg-3">
        <div class="wthree_pvt_title text-center">
            <h4 class="w3pvt-title">Portfolio
            </h4>
            <p class="sub-title">Subheadings stand out because they are like mini titles. They make your post stand
                out and
                make it more readable.</p>
        </div>
        <div>
            <ul class="demo row">
                <li class="col-lg-4">
                    <div class="img-grid">
                        <div class="Portfolio-grid1">
                            <a href="#gal1">
                                <img src="images/g1.jpg" alt=" " class="img-fluid" />
                            </a>
                        </div>
                        <div class="port-desc text-center">
                            <h6 class="main-title-w3pvt text-center">Some Description</h6>
                            <p> Lorem ipsum dolor sit amet,Stet clita kasd gubergren, sed diam voluptua. sed
                                diam
                                nonumy eirmod tempor invidunt ut.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4">
                    <div class="img-grid">
                        <div class="Portfolio-grid1">
                            <a href="#gal2">
                                <img src="images/g2.jpg" alt=" " class="img-fluid" />
                            </a>
                        </div>
                        <div class="port-desc text-center">
                            <h6 class="main-title-w3pvt text-center">Some Description</h6>
                            <p> Lorem ipsum dolor sit amet,Stet clita kasd gubergren, sed diam voluptua. sed
                                diam
                                nonumy eirmod tempor invidunt ut.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4">
                    <div class="img-grid">
                        <div class="Portfolio-grid1">
                            <a href="#gal3">
                                <img src="images/g3.jpg" alt=" " class="img-fluid" />
                            </a>
                        </div>
                        <div class="port-desc text-center">
                            <h6 class="main-title-w3pvt text-center">Some Description</h6>
                            <p> Lorem ipsum dolor sit amet,Stet clita kasd gubergren, sed diam voluptua. sed
                                diam
                                nonumy eirmod tempor invidunt ut.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4">
                    <div class="img-grid">
                        <div class="Portfolio-grid1">
                            <a href="#gal4">
                                <img src="images/g4.jpg" alt=" " class="img-fluid" />
                            </a>
                        </div>
                        <div class="port-desc text-center">
                            <h6 class="main-title-w3pvt text-center">Some Description</h6>
                            <p> Lorem ipsum dolor sit amet,Stet clita kasd gubergren, sed diam voluptua. sed
                                diam
                                nonumy eirmod tempor invidunt ut.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4">
                    <div class="img-grid">
                        <div class="Portfolio-grid1">
                            <a href="#gal5">
                                <img src="images/g5.jpg" alt=" " class="img-fluid" />
                            </a>
                        </div>
                        <div class="port-desc text-center">
                            <h6 class="main-title-w3pvt text-center">Some Description</h6>
                            <p> Lorem ipsum dolor sit amet,Stet clita kasd gubergren, sed diam voluptua. sed
                                diam
                                nonumy eirmod tempor invidunt ut.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4">
                    <div class="img-grid">
                        <div class="Portfolio-grid1">
                            <a href="#gal6">
                                <img src="images/g6.jpg" alt=" " class="img-fluid" />
                            </a>
                        </div>
                        <div class="port-desc text-center">
                            <h6 class="main-title-w3pvt text-center">Some Description</h6>
                            <p> Lorem ipsum dolor sit amet,Stet clita kasd gubergren, sed diam voluptua. sed
                                diam
                                nonumy eirmod tempor invidunt ut.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- popup-->
        <div id="gal1" class="popup-effect animate">
            <div class="popup">
                <img src="images/g1.jpg" alt="Popup Image" class="img-fluid" />
                <p class="editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                    dolor.</p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal2" class="popup-effect animate">
            <div class="popup">
                <img src="images/g2.jpg" alt="Popup Image" class="img-fluid" />
                <p class="editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                    dolor.</p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal3" class="popup-effect animate">
            <div class="popup">
                <img src="images/g3.jpg" alt="Popup Image" class="img-fluid" />
                <p class="editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                    dolor.</p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup3 -->
        <!-- popup-->
        <div id="gal4" class="popup-effect animate">
            <div class="popup">
                <img src="images/g4.jpg" alt="Popup Image" class="img-fluid" />
                <p class="editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                    dolor.</p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal5" class="popup-effect animate">
            <div class="popup">
                <img src="images/g5.jpg" alt="Popup Image" class="img-fluid" />
                <p class="editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                    dolor.</p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
        <!-- popup-->
        <div id="gal6" class="popup-effect animate">
            <div class="popup">
                <img src="images/g6.jpg" alt="Popup Image" class="img-fluid" />
                <p class="editContent mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat
                    dolor.</p>
                <a class="close" href="#gallery">&times;</a>
            </div>
        </div>
        <!-- //popup -->
    </div>
</section>
<!-- //portfolio -->

<!-- slide -->
<section class="wthree-slie-btm py-lg-5" id="more">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="slide-banner pl-0">
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-4">
                <div class="container">
                    <div class="wthree_pvt_title">
                        <h4 class="w3pvt-title">Industry Solutions
                        </h4>
                        <span class="sub-title">add your caption here</span>
                    </div>
                    <div class="row flex-column">
                        <div class="abt-grid">
                            <div class="row">
                                <div class="col-3">
                                    <div class="abt-icon">
                                        <span class="fa fa-fighter-jet"></span>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="abt-txt ml-0">
                                        <h4>sanctus takimata </h4>
                                        <p>Lo sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="abt-grid mt-4 pt-lg-2">
                            <div class="row">
                                <div class="col-3">
                                    <div class="abt-icon">
                                        <span class="fa fa-truck"></span>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="abt-txt ml-0">
                                        <h4>takimata sanctus</h4>
                                        <p>Lo sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <a href="about.html" class="btn w3ls-btn">view more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //slide -->

<!-- blog -->
<section class="blog_w3ls align-w3" id="blog">
    <div class="container">
        <div class="wthree_pvt_title text-center">
            <h4 class="w3pvt-title">latest posts
            </h4>
            <p class="sub-title">Subheadings stand out because they are like mini titles. They make your post stand
                out and
                make it more readable.</p>
        </div>
        <div class="row space-sec">
            <!-- blog grid -->
            <div class="col-lg-4 col-md-6 mt-sm-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="single.html">
                            <img class="card-img-bottom" src="images/g1.jpg" alt="Card image cap">
                            <span class="post-icon">blog post</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="blog-title card-title font-weight-bold">
                            <a href="single.html">Cras ultricies ligula sed.</a>
                        </h5>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                            ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                        <a href="single.html" class="blog_link">Read more</a>
                    </div>
                </div>
            </div>
            <!-- //blog grid -->
            <!-- blog grid -->
            <div class="col-lg-4 col-md-6 mt-md-0  mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="single.html">
                            <img class="card-img-bottom" src="images/g2.jpg" alt="Card image cap">
                            <span class="post-icon">blog post</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="blog-title card-title font-weight-bold">
                            <a href="single.html">magna porta au blandita.</a>
                        </h5>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                            ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                        <a href="single.html" class="blog_link">Read more</a>
                    </div>
                </div>
            </div>
            <!-- //blog grid -->
            <!-- blog grid -->
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 mx-auto blog-end">
                <div class="card">
                    <div class="card-header p-0  position-relative">
                        <a href="single.html">
                            <img class="card-img-bottom" src="images/g3.jpg" alt="Card image cap">
                            <span class="post-icon">blog post</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="blog-title card-title font-weight-bold">
                            <a href="single.html">Cras ultricies ligula sed.</a>
                        </h5>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                            ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                        <a href="single.html" class="blog_link">Read more</a>
                    </div>
                </div>
            </div>
            <!-- //blog grid -->
        </div>
    </div>
</section>
<!-- //blog -->
@endsection

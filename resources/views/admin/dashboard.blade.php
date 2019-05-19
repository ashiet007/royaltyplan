@extends('layouts.backend')
@section('styles')
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard/animation/animation-custom.css')}}">
@endsection
@section('content')
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">50,000</span></h2>
                            <p>Total Website Traffics</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">90,000</span>k</h2>
                            <p>Website Impressions</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2>$<span class="counter">40,000</span></h2>
                            <p>Total Online Sales</p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter">1,000</span></h2>
                            <p>Total Support Tickets</p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->
    <div class="animation-area top-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="animation-single-int">
                        <div class="animation-ctn-hd">
                            <h2>Attention Seekers</h2>
                            <p>Click on the buttons below to start the animation action in image.</p>
                        </div>
                        <div class="animation-img mg-b-15">
                            <img class="animate-one" src="{{asset('img/widgets/2.png')}}" alt="" />
                        </div>
                        <div class="animation-action">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="animation-btn">
                                        <button class="btn ant-nk-st bounce-ac">bounce</button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="animation-btn sm-res-mg-t-10 tb-res-mg-t-10 dk-res-mg-t-10">
                                        <button class="btn ant-nk-st flash-ac">flash</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mg-t-10">
                                <div class="col-lg-6">
                                    <div class="animation-btn">
                                        <button class="btn ant-nk-st pulse-ac">pulse</button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="animation-btn sm-res-mg-t-10 tb-res-mg-t-10 dk-res-mg-t-10">
                                        <button class="btn ant-nk-st rubberBand-ac">rubberBand</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="animation-single-int sm-res-mg-t-30">
                        <div class="animation-ctn-hd">
                            <h2>Bouncing Entrances</h2>
                            <p>Click on the buttons below to start the animation action in image.</p>
                        </div>
                        <div class="animation-img mg-b-15">
                            <img class="animate-two" src="{{asset('img/widgets/2.png')}}" alt="" />
                        </div>
                        <div class="animation-action">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="animation-btn">
                                        <button class="btn ant-nk-st bounceIn-ac">bounceIn</button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="animation-btn sm-res-mg-t-10 tb-res-mg-t-10 dk-res-mg-t-10">
                                        <button class="btn ant-nk-st bounceInDown-ac">bounceInDown</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mg-t-10">
                                <div class="col-lg-6">
                                    <div class="animation-btn">
                                        <button class="btn ant-nk-st bounceInLeft-ac">bounceInLeft</button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="animation-btn sm-res-mg-t-10 tb-res-mg-t-10 dk-res-mg-t-10">
                                        <button class="btn ant-nk-st bounceInUp-ac">bounceInRight</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="animation-single-int sm-res-mg-t-30">
                        <div class="animation-ctn-hd">
                            <h2>Bouncing Exits</h2>
                            <p>Click on the buttons below to start the animation action in image.</p>
                        </div>
                        <div class="animation-img mg-b-15">
                            <img class="animate-three" src="{{asset('img/widgets/2.png')}}" alt="" />
                        </div>
                        <div class="animation-action">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="animation-btn">
                                        <button class="btn ant-nk-st bounceOut-ac">bounceOut</button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="animation-btn sm-res-mg-t-10 tb-res-mg-t-10 dk-res-mg-t-10">
                                        <button class="btn ant-nk-st bounceOutDown-ac">bounceOutDown</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mg-t-10">
                                <div class="col-lg-6">
                                    <div class="animation-btn">
                                        <button class="btn ant-nk-st bounceOutLeft-ac">bounceOutLeft</button>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="animation-btn sm-res-mg-t-10 tb-res-mg-t-10 dk-res-mg-t-10">
                                        <button class="btn ant-nk-st bounceOutRight-ac">bounceOutRight</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sale Statistic area-->
@endsection


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
                <!-- Give Help Link Panel -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- Single Give Help Link Panel -->
                    <div class="animation-single-int">
                        <div class="animation-img mg-b-15">
                            <img class="animate-one" src="{{asset('images/give-help.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div class="inbox-left-sd padding-top">
                        <div class="compose-ml">
                            <a class="btn" href="#">Give Help Link</a>
                        </div>
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                                <li><a href="#"><i class="notika-icon notika-promos"></i> Receiver ID<span class="pull-right">test123</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-dollar"></i> Link Amount<span class="pull-right">1000</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-calendar"></i> Link Created Date<span class="pull-right">12, May 2019</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-support"></i> Receiver Name<span class="pull-right">Test User</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-phone"></i> Receiver Mobile<span class="pull-right">8965236598</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-phone"></i> Receiver Other Mobile<span class="pull-right">5645871232</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-star"></i> Receiver State<span class="pull-right">Uttar Pradesh</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-flag"></i> Receiver District<span class="pull-right">Lucknow</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-house"></i> Receiver Bank Name<span class="pull-right">Punjab National Bank</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-draft"></i> Receiver A/C<span class="pull-right">983221545623</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-file"></i> Receiver Bank IFSC<span class="pull-right">MNJH0215487</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-windows"></i> Receiver Bank Branch<span class="pull-right">Gomti Nagar</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-finance"></i> Receiver Paytm Number<span class="pull-right">9856236598</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-sent"></i> Receiver GPay Number<span class="pull-right">8965235698</span></a></li>
                            </ul>
                        </div>
                        <div class="button-icon-btn text-center">
                            <button class="btn btn-default btn-icon-notika give-help-button"><i class="notika-icon notika-file"></i> Upload Slip</button>
                            <button class="btn btn-default btn-icon-notika give-help-button"><i class="notika-icon notika-eye"></i> View Slip</button>
                            <button class="btn btn-default btn-icon-notika give-help-button"><i class="notika-icon notika-chat"></i> Message</button>
                            <button class="btn btn-default btn-icon-notika give-help-button"><i class="notika-icon notika-alarm"></i> Timer</button>
                            <button class="btn btn-default btn-icon-notika give-help-button"><i class="notika-icon notika-alarm"></i> Timer</button>
                        </div>
                        <hr>
                    </div>
                    <!-- //Single Give Help Link Panel -->
                </div>
                <!-- Give Help Link Panel -->

                <!-- Get Help Link Panel -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <!-- Single Get Help Link Panel -->
                    <div class="animation-single-int sm-res-mg-t-30">
                        <div class="animation-img mg-b-15">
                            <img class="animate-two" src="{{asset('images/give-help.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div class="inbox-left-sd padding-top">
                        <div class="compose-ml">
                            <a class="btn get-help-heading" href="#">Get Help Link</a>
                        </div>
                        <div class="inbox-status">
                            <ul class="inbox-st-nav inbox-ft">
                                <li><a href="#"><i class="notika-icon notika-promos get-help-icon"></i> Sender ID<span class="pull-right">test123</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-dollar get-help-icon"></i> Link Amount<span class="pull-right">1000</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-calendar get-help-icon"></i> Created Date<span class="pull-right">12, May 2019</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-support get-help-icon"></i> Sender Name<span class="pull-right">Test User</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-phone get-help-icon"></i> Sender Mobile<span class="pull-right">1234567890</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-phone get-help-icon"></i> Sender Other Mobile<span class="pull-right">1234567890</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-house get-help-icon"></i> Sender State<span class="pull-right">Uttar Pradesh</span></a></li>
                                <li><a href="#"><i class="notika-icon notika-flag get-help-icon"></i> Sender District<span class="pull-right">Lucknow</span></a></li>
                            </ul>
                        </div>
                        <div class="button-icon-btn text-center">
                            <button class="btn btn-default btn-icon-notika get-help-button"><i class="notika-icon notika-house"></i> Accept</button>
                            <button class="btn btn-default btn-icon-notika get-help-button"><i class="notika-icon notika-eye"></i> View Slip</button>
                            <button class="btn btn-default btn-icon-notika get-help-button"><i class="notika-icon notika-chat"></i> Message</button>
                            <button class="btn btn-default btn-icon-notika get-help-button"><i class="notika-icon notika-alarm"></i> Timer</button>
                            <button class="btn btn-default btn-icon-notika get-help-button"><i class="notika-icon notika-alarm"></i> Timer</button>
                            <button class="btn btn-default btn-icon-notika get-help-button"><i class="notika-icon notika-right-arrow"></i> Extension</button>
                            <button class="btn btn-default btn-icon-notika get-help-button"><i class="notika-icon notika-close"></i> Reject</button>
                        </div>
                        <hr>
                    </div>
                    <!-- Single Get Help Link Panel -->
                </div>
                <!-- Get help link Panel -->
            </div>
        </div>
    </div>
    <!-- End Sale Statistic area-->
@endsection

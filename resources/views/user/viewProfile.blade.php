@extends('layouts.backend')
@section('styles')
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard/animation/animation-custom.css')}}">
    <style>
        .contact-list{
            margin-bottom: 15px;
        }
        .table>tbody>tr>td{
            border: none;
        }
        .table>tbody>tr>th{
            border: none;
        }
    </style>
@endsection
@section('content')
    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Profile</h2>
                                        <p>Welcome to Notika <span class="bread-ntd">Admin Template</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-list">
                        <div class="contact-win">
                            <div class="contact-img">
                                <img src="{{asset('img/man.png')}}" alt="" />
                            </div>
                            <div class="conct-sc-ic">
                                <a class="btn" href="#"><i class="notika-icon notika-facebook"></i></a>
                                <a class="btn" href="#"><i class="notika-icon notika-twitter"></i></a>
                                <a class="btn" href="#"><i class="notika-icon notika-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="contact-ctn">
                            <div class="contact-ad-hd">
                                <h2>{{$user->name}}</h2>
                                <p class="ctn-ads">{{$user->userDetails->userDistrict->name}}, {{$user->userDetails->userState->name}}</p>
                                <p class="ctn-ads">{{$user->email}}</p>
                            </div>
                        </div>
                        <div class="social-st-list">
                            <div class="social-sn">
                                <h2>Username:</h2>
                                <p>{{$user->user_name}}</p>
                            </div>
                            <div class="social-sn">
                                <h2>Mobile Number:</h2>
                                <p>{{$user->userDetails->mob_no}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-list">
                        <div class="widget-tabs-list tab-pt-mg sm-res-mg-t-30 tb-res-mg-t-30">
                            <ul class="nav nav-tabs tab-nav-center">
                                <li class="active"><a data-toggle="tab" href="#home4">Personal Details</a></li>
                                <li><a data-toggle="tab" href="#menu14">Payment Details</a></li>
                            </ul>
                            <div class="tab-content tab-custom-st">
                                <div id="home4" class="tab-pane in active animated zoomInRight">
                                    <div class="tab-ctn">
                                        <table class="table table-responsive table-borderless">
                                            <tr>
                                                <th>Username</th>
                                                <td>{{$user->user_name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Name</th>
                                                <td>{{$user->name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Mobile Number</th>
                                                <td>{{$user->userdetails->mob_no}}</td>
                                            </tr>
                                            <tr>
                                                <th>Alternate Mobile Number</th>
                                                <td>{{$user->userDetails->alternate_mob_no}}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{$user->email}}</td>
                                            </tr>
                                            <tr>
                                                <th>State</th>
                                                <td>{{$user->userDetails->userState->name}}</td>
                                            </tr>
                                            <tr>
                                                <th>District</th>
                                                <td>{{$user->userDetails->userDistrict->name}}</td>
                                            </tr>
                                            <tr>
                                                <th>DOJ</th>
                                                <td>{{$user->created_at->format('d, M Y h:i:s A')}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div id="menu14" class="tab-pane animated zoomInRight">
                                    <div class="tab-ctn">
                                        <table class="table table-responsive table-borderless">
                                            <tr>
                                                <th>Bank Name</th>
                                                <td>{{$user->userDetails->userBank->name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Account Number</th>
                                                <td>{{$user->userDetails->account_no}}</td>
                                            </tr>
                                            <tr>
                                                <th>Branch</th>
                                                <td>{{$user->userdetails->branch}}</td>
                                            </tr>
                                            <tr>
                                                <th>IFSC Code</th>
                                                <td>{{$user->userDetails->ifsc_code}}</td>
                                            </tr>
                                            <tr>
                                                <th>Paytm Number</th>
                                                <td>{{isset($user->userDetails->paytm_no) ? $user->userDetails->paytm_no : 'N/A'}}</td>
                                            </tr>
                                            <tr>
                                                <th>GPay Number</th>
                                                <td>{{isset($user->userDetails->gpay_no) ? $user->userDetails->gpay_no : 'N/A'}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

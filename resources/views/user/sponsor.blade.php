@extends('layouts.backend')

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
                                        <h2>Sponsor Info</h2>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="contact-list">
                        <table class="table table-bordered">
                            <tr>
                                <th>Username</th>
                                <td>{{$sponsorDetails->user_name}}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$sponsorDetails->name}}</td>
                            </tr>
                            <tr>
                                <th>Mobile Number</th>
                                <td>{{$sponsorDetails->userDetails->mob_no}}</td>
                            </tr>
                            <tr>
                                <th>Alternate Mobile Number</th>
                                <td>{{$sponsorDetails->userDetails->alternate_mob_no}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$sponsorDetails->email}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

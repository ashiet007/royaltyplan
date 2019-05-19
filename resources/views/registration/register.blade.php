@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/roboto-font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.min.css')}}">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('css/form-style.css')}}"/>
    <style>
        /*label{*/
        /*    color: #fc636b;*/
        /*}*/
        /*.form-control {*/
        /*    border-color: #fc636b;*/
        /*}*/
    </style>
@endsection
@section('content')
    @php
        Session::forget('errors');
    @endphp

    <!-- inner banner -->
    <div class="inner-banner-w3ls d-flex flex-column justify-content-center align-items-center">
    </div>
    <!-- //inner banner -->
    <!-- breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->

    <!-- register  -->
    <div class="page-content">
        <div class="wizard-v3-content">
            <div class="wizard-form">
                <div class="loader">
                    <img src="{{asset('images/Rolling-1s-200px.gif')}}">
                </div>
                <div class="wizard-header">
                    <h3 class="heading">Sign Up Your User Account</h3>
                    <p>Fill all form field to go next step</p>
                </div>
                <form class="form-register" action="{{route('home.createUser')}}" method="post" id="my-form">
                    {{csrf_field()}}
                    <div id="form-total">
                        <div class="message">

                        </div>
                        <!-- Pin Information Section -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-key"></i></span>
                            <span class="step-text">Pin Number</span>
                        </h2>
                        <section data-step="0">
                            <div class="inner">
                                <h3>Pin Information:</h3>
                                <div class="form-group {{ $errors->has('pin') ? 'has-error' : ''}}">
                                    <label class="control-label col-md-4">Pin</label>
                                    <div class="col-md-10">
                                        <input type="text" name="pin" value="" class="form-control" required="required" placeholder="Enter Pin">
                                    </div>
                                    {!! $errors->first('pin', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                        </section>
                        <!-- Personal Information Section -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-account"></i></span>
                            <span class="step-text">Personal</span>
                        </h2>
                        <section data-step="1">
                            @if(Session::has('errors'))
                                @php
                                    $errors = Session::get('errors');

                                @endphp
                            @endif
                            <div class="inner">
                                <h3>Pin Details:</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('pin_amount') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">Pin Amount <span>*</span></label>
                                            <div class="col-md-10">
                                                @if(Session::has('pinDetails'))
                                                    @php

                                                        $pinDetails = Session::get('pinDetails');
                                                    @endphp
                                                    @if(!empty($pinDetails))
                                                        @php
                                                        $pinAmount = $pinDetails['pin_help_amount']['pin_amount'];
                                                        $giveHelpAmount = $pinDetails['pin_help_amount']['give_help_amount'];
                                                        @endphp
                                                    @else
                                                        @php
                                                        $pinAmount = '';
                                                        $giveHelpAmount ='';
                                                        @endphp
                                                    @endif
                                                @else
                                                    @php
                                                        $pinAmount = '';
                                                        $giveHelpAmount ='';
                                                    @endphp
                                                @endif
                                                <input type="number" name="pin_amount" class="form-control" placeholder="Pin Amount" required value="{{$pinAmount}}" readonly>
                                                {!! $errors->first('pin_amount', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 {{ $errors->has('give_help_amount') ? 'has-error' : ''}}">
                                        <div class="form-group">
                                            <label class="control-label col-md-8">Give Help Amount <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="number" name="give_help_amount" class="form-control" placeholder="Give help amount" value="{{$giveHelpAmount}}" required readonly>
                                                {!! $errors->first('give_help_amount', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <h3>Sponsor Details:</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('sponsor_id') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">Sponsor Id <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" name="sponsor_id" id="sponsorId" class="form-control" placeholder="Sponsor Id" value="{{!empty($sponsorDetails) ? $sponsorDetails['user_name']:old('sponsor_id')}}" required onchange="getSponsorDetails();">
                                                {!! $errors->first('sponsor_id', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('sponsor_name') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">Sponsor Name <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" name="sponsor_name" class="form-control" placeholder="Sponsor Name" value="{{!empty($sponsorDetails) ? $sponsorDetails['name']:old('sponsor_name')}}" required id="sponsorName">
                                                {!! $errors->first('sponsor_name', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3>Personal Details:</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('user_name') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">User Name <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" name="user_name" class="form-control" placeholder="Choose User Name" required value="{{old('user_name')}}">
                                                {!! $errors->first('user_name', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">Name <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" name="name" class="form-control" placeholder="Name as per bank account" required value="{{old('name')}}">
                                                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('mob_no') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">Mobile Number <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="number" name="mob_no" class="form-control" placeholder="Mobile number" required value="{{old('mob_no')}}">
                                                {!! $errors->first('mob_no', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('alternate_mob_no') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">Other Mobile Number <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="number" name="alternate_mob_no" class="form-control" placeholder="Other mobile number" required value="{{old('alternate_mob_no')}}">
                                                {!! $errors->first('alternate_mob_no', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('state_id') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">State <span>*</span></label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="state_id" id="state" required onchange="getdistricts();">
                                                   <option value=""><-- Select state --></option>
                                                    @foreach($states as $state)
                                                        <option value="{{$state->id}}" {{$state->id == old('state_id') ? 'selected':''}}>{{$state->name}}</option>
                                                    @endforeach
                                                </select>
                                                {!! $errors->first('state_id', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('district_id') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">District <span>*</span></label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="district_id" required id="district">
                                                    <option value=""><-- Select district --></option>
                                                </select>
                                                {!! $errors->first('district_id', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">Email <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="email" name="email" class="form-control" required placeholder="Email" value="{{old('email')}}">
                                                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3>Payment Details:</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('bank_id') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">Bank Name <span>*</span></label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="bank_id" required>
                                                    <option value=""><-- Select bank --></option>
                                                    @foreach($banks as $bank)
                                                     <option value="{{$bank->id}}" {{$bank->id == old('bank_id') ? 'selected':''}}>{{$bank->name}}</option>
                                                    @endforeach
                                                </select>
                                                {!! $errors->first('bank_id', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('account_no') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">Account Number <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" name="account_no" class="form-control" placeholder="Account number" required value="{{old('account_no')}}">
                                                {!! $errors->first('account_no', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('ifsc_code') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">IFSC Code <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" name="ifsc_code" class="form-control" placeholder="IFSC code" required value="{{old('ifsc_code')}}">
                                                {!! $errors->first('ifsc_code', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('branch') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">Bank Branch <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="text" name="branch" class="form-control" placeholder="Branch" required value="{{old('branch')}}">
                                                {!! $errors->first('branch', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('paytm_no') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">Paytm Number <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="number" name="paytm_no" class="form-control" placeholder="Paytm number" required value="{{old('paytm_no')}}">
                                                {!! $errors->first('paytm_no', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('gpay_no') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">Gpay Number <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="number" name="gpay_no" class="form-control" placeholder="Gpay number" required value="{{old('gpay_no')}}">
                                                {!! $errors->first('sponsor_name', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">Password <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                                                {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
                                            <label class="control-label col-md-8">Confirm Password <span>*</span></label>
                                            <div class="col-md-10">
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                                                {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 3 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
                            <span class="step-text">Confirmation</span>
                        </h2>
                        <section data-step="2">
                            <div class="inner">
                                <h3>Confirm Details:</h3>
                                <div class="form-row table-responsive">
                                    @if(Session::has('formData'))
                                        @php
                                        $userData = Session::get('formData');
                                        @endphp
                                    @else
                                        @php
                                            $userData = null;
                                        @endphp
                                    @endif
                                    <table class="table">
                                        <tbody>
                                        <tr class="space-row">
                                            <th>Full Name:</th>
                                            <td id="fullname-val">{{!empty($userData) ? $userData['name'] : ''}}</td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>User Name:</th>
                                            <td id="fullname-val">{{!empty($userData) ? $userData['user_name'] : ''}}</td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>Email Address:</th>
                                            <td id="email-val">{{!empty($userData) ? $userData['email'] : ''}}</td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>Phone Number:</th>
                                            <td id="phone-val">{{!empty($userData) ? $userData['mob_no'] : ''}}</td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>Other Phone Number:</th>
                                            <td id="phone-val">{{!empty($userData) ? $userData['alternate_mob_no'] : ''}}</td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>State:</th>
                                            <td id="username-val">{{!empty($userData) ? $userData['stateName'] : ''}}</td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>District:</th>
                                            <td id="gender-val">{{!empty($userData) ? $userData['districtName'] : ''}}</td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>Bank Name:</th>
                                            <td id="address-val">{{!empty($userData) ? $userData['bankName'] : ''}}</td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>Account Number:</th>
                                            <td id="pay-val">{{!empty($userData) ? $userData['account_no'] : ''}}</td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>IFSC Code:</th>
                                            <td id="pay-val">{{!empty($userData) ? $userData['ifsc_code'] : ''}}</td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>Branch:</th>
                                            <td id="pay-val">{{!empty($userData) ? $userData['branch'] : ''}}</td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>GPay Number:</th>
                                            <td id="pay-val">{{!empty($userData) ? $userData['gpay_no'] : ''}}</td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>Paytm Number:</th>
                                            <td id="pay-val">{{!empty($userData) ? $userData['paytm_no'] : ''}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 4 -->
                        <h2>
                            <span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
                            <span class="step-text">Mobile Verification</span>
                        </h2>
                        <section data-step="3">
                            <div class="inner">
                                <h3>Mobile Verification:</h3>
                                <div class="form-group">
                                    <input type="hidden" name="sentOtp" value="{{Session::get('otp')}}" id="sentOtp">
                                    <label class="control-label col-md-6">Enter OTP</label>
                                    <div class="col-md-10">
                                            <input type="number" name="otp" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- //register -->

@endsection
@section('scripts')
    <script src="{{asset('js/jquery.steps.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script>
       function getdistricts()
       {
           $('.loader').show();
           var stateId = $('#state').val();

           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
               }
           });
           $.ajax({
               url: "{{ route('home.getDistricts') }}",
               method: 'post',
               data: {
                   state_id: stateId
               },
               success: function(result){
                   $('.loader').css('display','none');
                   $('#district').empty();
                   $('#district').append('<option value=""><-- Select district --></option>');
                   $.each(result.districts, function (index, value) {
                       $('#district').append($('<option>', {
                           value: index,
                           text : value
                       }));
                   });
               },
               error: function (xhr) {
                   $('.loader').css('display','none');
               }
           });
       }

       /************** Step Form *************/
       $(function(){
           $("#form-total").steps({
               headerTag: "h2",
               bodyTag: "section",
               transitionEffect: "fade",
               enableAllSteps: false,
               autoFocus: true,
               transitionEffectSpeed: 500,
               titleTemplate : '<div class="title">#title#</div>',
               labels: {
                   previous : 'Previous',
                   next : 'Next Step',
                   finish : 'Submit',
                   current : ''
               },
               onStepChanging: function (event, currentIndex, newIndex) {
                   $('.loader').show();
                   var data =  $('form').serializeArray();
                   data.push({name: 'currentIndex', value: currentIndex});
                   console.log(data);
                   var move = false;
                       $.ajaxSetup({
                           headers: {
                               'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                           }
                       });
                       $.ajax({
                           url: "{{ route('home.verifyForm') }}",
                           async: false,
                           method: 'post',
                           data: data,
                           success: function(result){
                               $('.loader').css('display','none');
                               $("section[data-step='"+newIndex+"']").load(location.href + " section[data-step='"+newIndex+"']");
                               var successHtml = '<div class="alert alert-success">'+
                                   '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
                                   '<strong><i class="glyphicon glyphicon-ok-sign push-5-r"></</strong> '+ result.message +
                                   '</div>';
                               $('.message').html(successHtml);
                               move = result.success;
                               return true;
                           },
                           error: function (xhr) {
                               $('.loader').css('display','none');
                               $("section[data-step='"+currentIndex+"']").load(location.href + " section[data-step='"+currentIndex+"']");
                               console.log(xhr.responseJSON.error)
                               var successHtml = '<div class="alert alert-danger">'+
                                   '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
                                   '<strong><i class="glyphicon glyphicon-ok-sign push-5-r"></</strong> '+ xhr.responseJSON.error +
                                   '</div>';
                               $('.message').html(successHtml);
                               check = false;
                           }
                       });
                   return move;
               },
               onFinishing: function (event, currentIndex) {
                   $('.loader').show();
                   var data =  $('form').serializeArray();
                   data.push({name: 'currentIndex', value: currentIndex});
                   console.log(data);
                   var move = false;
                   $.ajaxSetup({
                       headers: {
                           'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                       }
                   });
                   $.ajax({
                       url: "{{ route('home.verifyForm') }}",
                       async: false,
                       method: 'post',
                       data: data,
                       success: function(result){
                           $('.loader').css('display','none');
                           move = result.success;
                           return true;
                       },
                       error: function (xhr) {
                           $('.loader').css('display','none');
                           $("section[data-step='"+currentIndex+"']").load(location.href + " section[data-step='"+currentIndex+"']");
                           console.log(xhr.responseJSON.error)
                           var successHtml = '<div class="alert alert-danger">'+
                               '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
                               '<strong><i class="glyphicon glyphicon-ok-sign push-5-r"></</strong> '+ xhr.responseJSON.error +
                               '</div>';
                           $('.message').html(successHtml);
                           check = false;
                       }
                   });
                   return move;
               },
               onFinished: function (event, currentIndex) {
                   $("#my-form").submit();
               }
           });
           $("#date").datepicker({
               dateFormat: "MM - DD - yy",
               showOn: "both",
               buttonText : '<i class="zmdi zmdi-chevron-down"></i>',
           });
       });
       function getSponsorDetails()
       {
           $('.loader').show();
           var sponsorId = $('#sponsorId').val();
           $('#sponsorName').val('');
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
               }
           });
           $.ajax({
               url: "{{ route('home.getSponsorDetails') }}",
               method: 'post',
               data: {
                   sponsorId: sponsorId
               },
               success: function(result){
                   $('.loader').css('display','none');
                   $('#sponsorName').val(result.sponsorName);
                   $('#sponsorName').attr('readonly','readonly');
               },
               error:function (xhr) {
                   $('.loader').css('display','none');
                   alert('Invalid Sponsor');
               }
           });

       }
    </script>
    @endsection
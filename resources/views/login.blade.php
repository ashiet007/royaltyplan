@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/roboto-font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/form-style.css')}}"/>
    <style>
        .wizard-form {
            padding-bottom: 25px;
        }
    </style>
@endsection
@section('content')
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
            <li class="breadcrumb-item active" aria-current="page">Login</li>
        </ol>
    </nav>
    <!-- //breadcrumbs -->
    <div class="page-content">
        <div class="wizard-v3-content">
            <div class="wizard-form">
                <div class="wizard-header">
                    <h3 class="heading">Sign-In Your User Account</h3>
                    <p>Fill all form field </p>
                </div>
                <div class="container login-form-container col-md-10">
                    <form class="form-horizontal form-login" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="content">
                            @if(Session::has('flash_message'))
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                            @endif
                            <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                                <label for="user_name" class="col-md-4 control-label">User Name</label>
                                <div class="col-md-11">
                                    <input id="user_name" type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" placeholder="Username" required autofocus>
                                    @if ($errors->has('user_name'))
                                        <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('user_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-11">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-4">
                                    <input class="form-control btn btn-secondary" type="submit" value="Login">
                                    <a class="btn btn-link" href="#">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
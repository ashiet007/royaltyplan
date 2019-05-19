@extends('layouts.backend')
@section('styles')
    <!-- bootstrap select CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/bootstrap-select/bootstrap-select.css')}}">
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
                                        <h2>User Security</h2>
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
    <form action="{{route('profile.changeSecurity')}}" method="post">
        {{csrf_field()}}
        <div class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-element-list mg-t-30">
                            <div class="cmp-tb-hd">
                                <h2>Security Type</h2>
                                <p></p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="nk-int-mk sl-dp-mn">
                                        <h2>Select Type</h2>
                                    </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                        <select class="selectpicker" name="type" required>
                                            <option value="login">Login</option>
                                            <option value="transaction">Transaction</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="contact-list">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $errors->has('current_password') ? 'has-error' : ''}}">
                                        <div class="nk-int-mk">
                                            <h2>Current Password</h2>
                                        </div>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-pinterest"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="password" name="current_password" class="form-control" placeholder="Current Password" required>
                                                {!! $errors->first('current_password', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $errors->has('password') ? 'has-error' : ''}}">
                                        <div class="nk-int-mk">
                                            <h2>New Password</h2>
                                        </div>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-edit"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="password" name="password" class="form-control" placeholder="New Password" required>
                                                {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
                                        <div class="nk-int-mk">
                                            <h2>Confirm Password</h2>
                                        </div>
                                        <div class="form-group ic-cmp-int">
                                            <div class="form-ic-cmp">
                                                <i class="notika-icon notika-checked"></i>
                                            </div>
                                            <div class="nk-int-st">
                                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                                                {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-success btn-icon-notika"><i class="notika-icon notika-refresh"></i> Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('scripts')
    <!-- bootstrap select JS
		============================================ -->
    <script src="{{asset('js/dashboard/bootstrap-select/bootstrap-select.js')}}"></script>
@endsection
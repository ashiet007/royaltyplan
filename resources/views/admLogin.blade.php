<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Register | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/bootstrap.min.css')}}">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/normalize.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/wave/waves.min.css')}}">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/notika-custom-icon.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/main.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/dashboard/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('js/dashboard/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Login Register area Start-->
<div class="login-content">
    <!-- Login -->
    <div class="nk-block toggled" id="l-login">
        <form action="{{route('admin.authenticate')}}" method="post">
            {{csrf_field()}}
        <div class="nk-form">
            <div class="input-group">
                <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                <div class="nk-int-st">
                    <input type="text" class="form-control" name="user_name" placeholder="Username">
                </div>
            </div>
            <div class="input-group mg-t-15">
                <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                <div class="nk-int-st">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            </div>
            <div class="fm-checkbox">
                <label><input type="checkbox" class="i-checks"> <i></i> Keep me signed in</label>
            </div>
            <button type="submit" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></button>
        </div>
        </form>

        <div class="nk-navigation nk-lg-ic">
            <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
            <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
        </div>
    </div>

    <!-- Register -->
    <div class="nk-block" id="l-register">
        <div class="nk-form">
            <div class="input-group">
                <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                <div class="nk-int-st">
                    <input type="text" class="form-control" placeholder="Username">
                </div>
            </div>

            <div class="input-group mg-t-15">
                <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                <div class="nk-int-st">
                    <input type="text" class="form-control" placeholder="Email Address">
                </div>
            </div>

            <div class="input-group mg-t-15">
                <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                <div class="nk-int-st">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
            </div>

            <a href="#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
        </div>

        <div class="nk-navigation rg-ic-stl">
            <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
            <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
        </div>
    </div>

    <!-- Forgot Password -->
    <div class="nk-block" id="l-forget-password">
        <div class="nk-form">
            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>

            <div class="input-group">
                <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                <div class="nk-int-st">
                    <input type="text" class="form-control" placeholder="Email Address">
                </div>
            </div>

            <a href="#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
        </div>

        <div class="nk-navigation nk-lg-ic rg-ic-stl">
            <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
            <a href="" data-ma-action="nk-login-switch" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
        </div>
    </div>
</div>
<!-- Login Register area End-->
<!-- jquery
    ============================================ -->
<script src="{{asset('js/dashboard/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('js/dashboard/bootstrap.min.js')}}"></script>
<!-- wow JS
    ============================================ -->
<script src="{{asset('js/dashboard/wow.min.js')}}"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{asset('js/dashboard/jquery-price-slider.js')}}"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{asset('js/dashboard/owl.carousel.min.js')}}"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('js/dashboard/jquery.scrollUp.min.js')}}"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('js/dashboard/meanmenu/jquery.meanmenu.js')}}"></script>
<!-- counterup JS
    ============================================ -->
<script src="{{asset('js/dashboard/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/dashboard/counterup/waypoints.min.js')}}"></script>
<script src="{{asset('js/dashboard/counterup/counterup-active.js')}}"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{asset('js/dashboard/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- sparkline JS
    ============================================ -->
<script src="{{asset('js/dashboard/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('js/dashboard/sparkline/sparkline-active.js')}}"></script>
<!-- flot JS
    ============================================ -->
<script src="{{asset('js/dashboard/flot/jquery.flot.js')}}"></script>
<script src="{{asset('js/dashboard/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('js/dashboard/flot/flot-active.js')}}"></script>
<!-- knob JS
    ============================================ -->
<script src="{{asset('js/dashboard/knob/jquery.knob.js')}}"></script>
<script src="{{asset('js/dashboard/knob/jquery.appear.js')}}"></script>
<script src="{{asset('js/dashboard/knob/knob-active.js')}}"></script>
<!--  Chat JS
    ============================================ -->
<script src="{{asset('js/dashboard/chat/jquery.chat.js')}}"></script>
<!--  wave JS
    ============================================ -->
<script src="{{asset('js/dashboard/wave/waves.min.js')}}"></script>
<script src="{{asset('js/dashboard/wave/wave-active.js')}}"></script>
<!-- icheck JS
    ============================================ -->
<script src="{{asset('js/dashboard/icheck/icheck.min.js')}}"></script>
<script src="{{asset('js/dashboard/icheck/icheck-active.js')}}"></script>
<!--  todo JS
    ============================================ -->
<script src="{{asset('js/dashboard/todo/jquery.todo.js')}}"></script>
<!-- Login JS
    ============================================ -->
<script src="{{asset('js/dashboard/login/login-action.js')}}"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('js/dashboard/plugins.js')}}"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('js/dashboard/main.js')}}"></script>
</body>

</html>

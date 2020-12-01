
<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
    <!-- begin::Head -->
    
<!-- Mirrored from keenthemes.com/metronic/preview/demo1/custom/pages/user/login-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Mar 2020 21:21:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8"/>

        <title>Metronic | Login Page </title>
        <meta name="description" content="Login page example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->

        
                    <!--begin::Page Custom Styles(used by this page) -->
                             <link href="{{asset('public/backend')}}/css/pages/login/login-4.css" rel="stylesheet" type="text/css" />
                        <!--end::Page Custom Styles -->
        
        <!--begin::Global Theme Styles(used by all pages) -->
                    <link href="{{asset('public/backend')}}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
                    <link href="{{asset('public/backend')}}/css/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        
<link href="{{asset('public/backend')}}/css/skins/header/base/light.css" rel="stylesheet" type="text/css" />
<link href="{{asset('public/backend')}}/css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
<link href="{{asset('public/backend')}}/css/skins/brand/dark.css" rel="stylesheet" type="text/css" />
<link href="{{asset('public/backend')}}/css/skins/aside/dark.css" rel="stylesheet" type="text/css" />        <!--end::Layout Skins -->

        <link rel="shortcut icon" href="https://keenthemes.com/metronic/themes/metronic/theme/default/demo1/dist/{{asset('public/backend')}}/media/logos/favicon.ico" />

        <!-- Hotjar Tracking Code for keenthemes.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1070954,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-37564768-1');
</script>    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >
       
    	<!-- begin:: Page -->
	<div class="kt-grid kt-grid--ver kt-grid--root">
		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url({{asset('public/backend')}}/media/bg/bg-2.jpg);">
		<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
			<div class="kt-login__container">
				<div class="kt-login__logo">
					<a href="#">
						<img src="{{asset('public/backend')}}/media/logos/logo-5.png">  	
					</a>
				</div>
				<div class="kt-login__signin">
					<div class="kt-login__head">
						<h3 class="kt-login__title">Sign In To Admin</h3>
					</div>
					<form class="kt-form" method="POST" action="{{ route('login') }}" id="valideform">
                    @csrf
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            @foreach($errors->all() as $error)
                            <p><strong>{{$error}}</strong></p>
                            @endforeach
                        </div>
                        @endif
						<div class="input-group">
                            <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off" >
                           
						</div>
						<div class="input-group">
                            <input class="form-control" type="password" placeholder="Password" name="password">
                        
						</div>
						<div class="row kt-login__extra">
							<div class="col">
								<label class="kt-checkbox">
									<input type="checkbox" name="remember"> Remember me
									<span></span>
								</label>
							</div>
							<div class="col kt-align-right">
								<a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
							</div>
						</div>
						<div class="kt-login__actions">
							<button type="submit" class="btn btn-brand btn-pill kt-login__btn-primary">Login</button>
						</div>
					</form>
				</div>
		
				
			</div>	
		</div>
	</div>
</div>	
	</div>
<!-- end:: Page -->
@if(session()->has('success'))
    <script type="text/javascript">
      $(function(){
        $.notify("{{session()->get('success')}}",{globalPosition:'top right', className:'success'});
      });
    </script>
  @endif
  @if(session()->has('error'))
    <script type="text/javascript">
      $(function(){
        $.notify("{{session()->get('error')}}",{globalPosition:'top right', className:'error'});
      });
    </script>
  @endif

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
    "colors": {
        "state": {
            "brand": "#5d78ff",
            "dark": "#282a3c",
            "light": "#ffffff",
            "primary": "#5867dd",
            "success": "#34bfa3",
            "info": "#36a3f7",
            "warning": "#ffb822",
            "danger": "#fd3995"
        },
        "base": {
            "label": [
                "#c5cbe3",
                "#a1a8c3",
                "#3d4465",
                "#3e4466"
            ],
            "shape": [
                "#f0f3ff",
                "#d9dffa",
                "#afb4d4",
                "#646c9a"
            ]
        }
    }
};
        </script>
        <!-- end::Global Config -->

    	<!--begin::Global Theme Bundle(used by all pages) -->
            <script src="{{asset('public/backend')}}/plugins/global/plugins.bundle.js" type="text/javascript"></script>
            <script src="{{asset('public/backend')}}/js/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Global Theme Bundle -->

        
        <!--begin::Page Scripts(used by this page) -->
            <script src="{{asset('public/backend')}}/js/pages/custom/login/login-general.js" type="text/javascript"></script>
        <!--end::Page Scripts -->
            <!--begin::Page Scripts(used by this page) -->
            <script src="{{asset('public/backend')}}/js/pages/crud/forms/validation/form-controls.js" type="text/javascript"></script>
        <!--end::Page Scripts -->
        <script src="{{asset('public/backend')}}/js/pages/components/extended/bootstrap-notify.js" type="text/javascript"></script>
  
     </body>
    <!-- end::Body -->

<!-- Mirrored from keenthemes.com/metronic/preview/demo1/custom/pages/user/login-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Mar 2020 21:21:05 GMT -->
</html>


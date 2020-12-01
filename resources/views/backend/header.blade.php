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
    
<!-- Mirrored from keenthemes.com/metronic/preview/demo1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Mar 2020 21:12:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8"/>

        <title>Metronic | Dashboard</title>
        <meta name="description" content="Updates and statistics">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <link href="{{asset('public/backend')}}/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
        <!--begin::Page Vendors Styles(used by this page) -->
        <link href="{{asset('public/backend')}}/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles -->
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
        <script src="{{asset('public/backend')}}/plugins/global/plugins.bundle.js" type="text/javascript"></script>
        <script src="{{asset('public/backend')}}/js/scripts.bundle.js" type="text/javascript"></script>
        <script src="{{asset('public/backend')}}/js/pages/components/extended/bootstrap-notify.js" type="text/javascript"></script>
        <script src="{{asset('public/backend')}}/plugins/sweetalert/sweetalert.js"></script>
        <link href="{{asset('public/backend')}}/plugins/sweetalert/sweetalert.css" rel="stylesheet">
        <!-- Hotjar Tracking Code for keenthemes.com -->
        <style>
            .notifyjs-conner{
            z-index: 1000 !important;
            }
            .select2-container--default .select2-selection--multiple .select2-selection__choice{
            background-color: #007bff;
            }
        </style>
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
        </script>    
</head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >
       
    	<!-- begin:: Page -->
	<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
	<div class="kt-header-mobile__logo">
		<a href="index.html">
			<img alt="Logo" src="{{asset('public/backend')}}/media/logos/logo-light.png"/>
		</a>
	</div>
	<div class="kt-header-mobile__toolbar">
					<button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
		
					<button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
				
		<button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
	</div>
</div>
<!-- end:: Header Mobile -->	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
@extends('backend.master')
@section('content')
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
				<!-- begin:: Header -->
@include('backend.subheader')
<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
    <!--Begin:: App Aside Mobile Toggle-->
    <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
        <i class="la la-close"></i>
    </button>
    <!--End:: App Aside Mobile Toggle-->

    <!--Begin:: App Aside-->
    <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
        <!--begin:: Widgets/Applications/User/Profile1-->
<div class="kt-portlet ">
    <div class="kt-portlet__head  kt-portlet__head--noborder">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                <i class="flaticon-more-1"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
                <!--begin::Nav-->
<ul class="kt-nav">
    <li class="kt-nav__head">
        Export Options                                    
        <span data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
        <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
    </g>
</svg>        </span>
   </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-drop"></i>
            <span class="kt-nav__link-text">Activity</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
            <span class="kt-nav__link-text">FAQ</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-new-email"></i>
            <span class="kt-nav__link-text">Support</span>
            <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
            </span>
        </a>
    </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__foot">
        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>                                    
        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
    </li>
</ul>
<!--end::Nav-->			</div>
        </div>
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit-y">
        <!--begin::Widget -->
        <div class="kt-widget kt-widget--user-profile-1">
            <div class="kt-widget__head">
                <div class="kt-widget__media">
                <img src="{{(!empty(Auth::user()->avatar ))?url('public/upload/users/'.Auth::user()->avatar):url('public/download.jpg')}}" >
                </div>
                <div class="kt-widget__content">
                    <div class="kt-widget__section">
                        <a href="#" class="kt-widget__username">
                        {{ Auth::user()->name }}
                            <i class="flaticon2-correct kt-font-success"></i>
                        </a>
                        <span class="kt-widget__subtitle">
                        {{ Auth::user()->desination }}
                        </span>
                    </div>

                   
                </div>
            </div>
            <div class="kt-widget__body">
                <div class="kt-widget__content">
                    <div class="kt-widget__info">
                        <span class="kt-widget__label">Email:</span>
                        <a href="#" class="kt-widget__data">{{ Auth::user()->email }}</a>
                    </div>
                    <div class="kt-widget__info">
                        <span class="kt-widget__label">Phone:</span>
                        <a href="#" class="kt-widget__data">{{ Auth::user()->mobile }}</a>
                    </div>
                    <div class="kt-widget__info">
                        <span class="kt-widget__label">Address:</span>
                        <span class="kt-widget__data">{{ Auth::user()->address }}</span>
                    </div>
                    <div class="kt-widget__info">
                        <span class="kt-widget__label">Gender:</span>
                        <span class="kt-widget__data">{{ Auth::user()->gender }}</span>
                    </div>
                    <div class="kt-widget__info">
                        <span class="kt-widget__label">Religion:</span>
                        <span class="kt-widget__data">{{ Auth::user()->religion }}</span>
                    </div>
                </div>
                
            </div>
        </div>
        <!--end::Widget -->
    </div>
</div>
<!--end:: Widgets/Applications/User/Profile1-->
    </div>
    <!--End:: App Aside-->

    <!--Begin:: App Content-->
    <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Change Password<small>change or reset your account password</small></h3>
                        </div>
                        <div class="kt-portlet__head-toolbar kt-hidden">
                            <div class="kt-portlet__head-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-sellsy"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">Quick Actions</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-graph-1"></i>
                                                    <span class="kt-nav__link-text">Statistics</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                                                    <span class="kt-nav__link-text">Events</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-layers-1"></i>
                                                    <span class="kt-nav__link-text">Reports</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-bell-1o"></i>
                                                    <span class="kt-nav__link-text">Notifications</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon flaticon2-file-1"></i>
                                                    <span class="kt-nav__link-text">Files</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="kt-form kt-form--label-right" action="{{route('pass.store')}}" method="post" id="valideform">
                    @csrf
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    

                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">Change Or Recover Your Password:</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Current Password</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="password" class="form-control" name="curentPass" placeholder="Current password">
                                            <font color="red">{{($errors->has('curentPass'))?($errors->first('curentPass')):' '}}</font>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="password" class="form-control" name="newPass" placeholder="New password">
                                            <font color="red">{{($errors->has('newPass'))?($errors->first('newPass')):' '}}</font>
                                        </div>
                                    </div>
                                    <div class="form-group form-group-last row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Confirm Password</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <input type="password" class="form-control" name="confPass" placeholder="Confirm password">
                                            <font color="red">{{($errors->has('confPass'))?($errors->first('confPass')):' '}}</font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__foot">
                            <div class="kt-form__actions">
                                <div class="row">
                                    <div class="col-lg-3 col-xl-3">
                                    </div>
                                    <div class="col-lg-9 col-xl-9">
                                        <button type="submit" class="btn btn-brand btn-bold">Change Password</button>&nbsp;
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!--End:: App Content-->
</div>
<script type="text/javascript">
     $(document).ready(function(){
       $('#valideform').validate({
        rules: {
            curentPass: {
                required: true,
            },
            newPass: {
                required: true,
                minlength: 6
            },
            confPass: {
                required:true,
            },
        },
        messages:{
            curentPass:{
                required:"Please old password password",
            },
            newPass:{
                required:"Please enter new password",
                minlength:"Password will be 6 characters or number"
            },
            confPass:{
                required:"Please enter confram password",
            },
        },
        errorElement:'span',
        errorPlacement:function(error, element){
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error)
        },
        highlight:function(element, errorClass, validClass){
          $(element).addClass('is-invalid');
        },
        unhighlight:function(element, errorClass, validClass){
          $(element).removeClass('is-invalid');
        }
    });

    });
  </script>
@endsection
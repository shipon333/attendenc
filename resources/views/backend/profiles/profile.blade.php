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
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Personal Information <small>update your personal informaiton</small></h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <div class="kt-portlet__head-wrapper">
                                <div class="dropdown dropdown-inline">
                                    <button type="button" class="btn btn-label-brand btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon2-gear"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="kt-nav">
                                            <li class="kt-nav__section kt-nav__section--first">
                                                <span class="kt-nav__section-text">Export Tools</span>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                    <span class="kt-nav__link-text">Print</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                    <span class="kt-nav__link-text">Copy</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                    <span class="kt-nav__link-text">Excel</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                    <span class="kt-nav__link-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="kt-nav__item">
                                                <a href="#" class="kt-nav__link">
                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                    <span class="kt-nav__link-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form class="kt-form kt-form--label-right" action="{{route('profile.update',Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="kt-portlet__body">
                            <div class="kt-section kt-section--first">
                                <div class="kt-section__body">
                                    <div class="row">
                                        <label class="col-xl-3"></label>
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="kt-section__title kt-section__title-sm">Customer Info:</h3>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                        <div class="col-lg-9 col-xl-6">
                                            <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar">
                                                <div class="kt-avatar__holder" style="background-image: url({{url('public/upload/users/'.Auth::user()->avatar)}})"></div>
                                                
                                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                    <i class="fa fa-pen"></i>
                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                                </label>
                                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                    <i class="fa fa-times"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label" for="name">Full Name</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control" type="text"  name="name" id="name" value="{{ Auth::user()->name }}" placeholder="Enter Your Full Name">
                                            <font color="red">{{($errors->has('name'))?($errors->first('name')):' '}}</font>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label" for="dasination">Desination</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control" type="text"  name="desination" id="desination" value="{{ Auth::user()->desination }}" placeholder="Enter Your Desination">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gender" class="col-xl-3 col-lg-3 col-form-label">Gender</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <select class="form-control" name="gender" id="gender">
                                                <option value="">Please select gender</option>
                                                <option value="Male" {{ (@Auth::user()->gender=="Male")?"selected":' ' }} >Male</option>
                                                <option value="Femail" {{ (@Auth::user()->gender=="Femail")?"selected":' ' }}>Femail</option>
                                            </select>
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label" for="religion">Religion</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control" type="text"  name="religion" id="religion" value="{{ Auth::user()->religion }}" placeholder="Enter Your Religion">
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label" for="contact">Contact Phone</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                <input type="text" class="form-control" name="mobile" id="contact" value="{{ Auth::user()->mobile }}" placeholder="Phone" aria-describedby="basic-addon1">
                                                <br>
                                                
                                            </div>
                                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                                            <font color="red">{{($errors->has('mobile'))?($errors->first('mobile')):' '}}</font>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label" for="email">Email Address</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}"  placeholder="Email" aria-describedby="basic-addon1">
                                                <br>
                                                
                                            </div>
                                            <font color="red">{{($errors->has('email'))?($errors->first('email')):' '}}</font>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-lg-3 col-form-label" for="address">Address</label>
                                        <div class="col-lg-9 col-xl-9">
                                            <input class="form-control" type="text"  name="address" id="address" value="{{ Auth::user()->address }}" placeholder="Enter Your Address">
                                            
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
                                        <button type="submit" class="btn btn-success">Save</button>&nbsp;
                                        
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
@endsection
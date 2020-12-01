@extends('backend.master')
@section('content')
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
				<!-- begin:: Header -->
@include('backend.subheader')
<!-- end:: Header -->
				<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
											<!-- begin:: Content Head -->
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-subheader__main">
            
            <h3 class="kt-subheader__title">
                                      
                                    @if(isset($editData))
                                        Edit User 
                                    @else
                                        New User 
                                    @endif                        
            </h3>

            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
            
            <div class="kt-subheader__group" id="kt_subheader_search">
                <span class="kt-subheader__desc" id="kt_subheader_total">
                                            Enter user details and submit                                    </span>
                
                            </div>

                    </div>        
        <div class="kt-subheader__toolbar">

                            <a href="{{route('home')}}" class="btn btn-default btn-bold">
                    
                    Back                </a>
            
                                                
                                        
                    </div>
    </div>
</div>
<!-- end:: Content Head -->					
					<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<div class="kt-wizard-v4" id="kt_user_add_user" data-ktwizard-state="step-first">

    <!--end: Form Wizard Nav -->

    <div class="kt-portlet">
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="kt-grid">
                <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
                    <!--begin: Form Wizard Form-->
                    
                    <form class="kt-form"  action="{{(@$editData)?route('update.user',$editData->id):route('store.user')}}" method="post">
                    @csrf
                        <!--begin: Form Wizard Step 1-->
                        <div class="kt-wizard-v4__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                            
                            <div class="kt-section kt-section--first">
                                <div class="kt-wizard-v4__form">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="kt-section__body">
                                                
                                                <div class="form-group row">
                                                <label for="exampleSelects" class="col-xl-3 col-lg-3 col-form-label">User Type</label>
                                                    <div class="col-lg-9 col-xl-9">
                                                    <select class="form-control" name="roll" id="exampleSelects">
                                                        <option value="">Please select user</option>
                                                        <option value="Admin" {{(@$editData->roll=="Admin")?"selected":''}}>Admin</option>
                                                        <option value="User" {{(@$editData->roll=="User")?"selected":''}}>User</option>
                                                    </select>
                                                    <font color="red">{{($errors->has('roll'))?($errors->first('roll')):' '}}</font>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label" for="name">Full Name</label>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <input class="form-control" type="text"  name="name" id="name" value="{{@$editData->name}}" placeholder="Enter Your Full Name">
                                                        <font color="red">{{($errors->has('name'))?($errors->first('name')):' '}}</font>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label" for="contact">Contact Phone</label>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                            <input type="text" class="form-control" name="mobile" id="contact" value="{{@$editData->mobile}}" placeholder="Phone" aria-describedby="basic-addon1">
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
                                                            <input type="email" class="form-control" id="email" name="email" value="{{@$editData->email}}"  placeholder="Email" aria-describedby="basic-addon1">
                                                            <br>
                                                            
                                                        </div>
                                                        <font color="red">{{($errors->has('email'))?($errors->first('email')):' '}}</font>
                                                    </div>
                                                </div>
                                                <button type="submit"> {{(@$editData)?'Update':'Submit'}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!--end: Form Wizard Step 1-->

                        <!--begin: Form Actions -->
                        
                        <!--end: Form Actions -->
                    </form>
                    <!--end: Form Wizard Form-->
                </div>
            </div>
        </div>
    </div>
</div>
	</div>
<!-- end:: Content -->				</div>
@endsection
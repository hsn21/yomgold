@extends('layouts.admin.install')
@section('title', trans('admin.login') .' < '. get_site_title())
@section('content')

<div class="login-box">
  <div class="login-logo mb-2">
     <img src="{{asset('public/uploads/1596976672-h-40-Yom-Gold-Logo.png') }}" height="50">
  </div>
  
  <div class="login-box-body">
    <p class="login-box-msg"><b>Log In As Vendor</b></p>
    
    @include('pages-message.notify-msg-error')
    @include('pages-message.form-submit')
    @include('pages-message.notify-msg-success')

    
    <form method="post" action="{{route('vendor.login')}}" enctype="multipart/form-data">
     @include('includes.csrf-token')
      
      <div class="form-group has-feedback">
          <label>Email Address</label>
        <input type="email" class="form-control" placeholder="Email Address" name="vendor_login_email" >
      </div>
      
      <div class="form-group has-feedback">
          <label>Password</label><a href="{{route('vendor-forgotPassword')}}" class="float-right"> Forgot your password?</a>
        <input type="password" class="form-control" placeholder="Password" name="vendor_login_password" >
      </div>
      
       

      
      
      <div class="row">
        
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="">Next</button>
        </div>
        <div class="col-7 mt-3">
          <div class="checkbox icheck">
            <label>
                @if (Cookie::has('remember_me_data'))
              <input type="checkbox" name="remember_me" checked="checked">{{ trans('admin.remember_me') }}
              @else
              <input type="checkbox" name="remember_me" > {{ trans('admin.remember_me') }}
              @endif
            </label>
          </div>
        </div>
      </div>
    </form>
    <br>
    
     <p class="login-box-msg" style="border-bottom: 1px solid #000; line-height: 0.1em;">New User</p>
     <br>
     <div class="col-12">
        <button type="submit" onclick="window.location='{{ route("vendor-registration-page") }}'" class="btn btn-secondary btn-block btn-flat" name="">Create New Account</button>
     </div>
  </div>
</div>
@endsection

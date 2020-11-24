@extends('layouts.frontend.master')

@section('title', trans('frontend.frontend_user_registration_title') .' - '. get_site_title())
@section('content')


<div class="breadcrumbs_area">
<div class="container">
<div class="row">
<div class="col-12">
<div class="breadcrumb_content">
<ul>
{{-- <li><a href="index.php">home</a></li>
<li>Sign Up</li> --}}
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="login_page_bg">

@if($settings_data['general_options']['allow_registration_for_frontend'])
<div id="user_registration" class="container custom-extra-top-style">
  <div class="row justify-content-center">
    <div class="col-xs-12 col-sm-8 col-md-6 text-center">
      @include('pages-message.notify-msg-error')
      @include('pages-message.form-submit')

      <form method="post" action="" enctype="multipart/form-data">
        @include('includes.csrf-token')

        <h2>{!! trans('frontend.please_sign_up_label') !!} <small>{!! trans('frontend.sign_up_free_label') !!}</small></h2>
        <hr class="colorgraph">

        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group has-feedback">
              <input type="text" placeholder="{{ trans('frontend.display_name') }}" class="form-control" value="{{ old('display_name') }}" id="display_name" name="display_name">
              <span class="fa fa-user form-control-feedback"></span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group has-feedback">
              <input type="text" placeholder="{{ trans('frontend.user_name') }}" class="form-control" value="{{ old('user_name') }}" id="user_name" name="user_name">
              <span class="fa fa-user form-control-feedback"></span>
            </div>
          </div>
        </div>

        <div class="form-group has-feedback">
          <input type="email" placeholder="{{ ucfirst( trans('frontend.email') ) }}" class="form-control" id="email" value="{{ old('email') }}" name="email">
          <span class="fa fa-envelope form-control-feedback"></span>
        </div>

        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group has-feedback">
              <input type="password" placeholder="{{ ucfirst(trans('frontend.password')) }}" class="form-control" id="password" name="password">
              <span class="fa fa-lock form-control-feedback"></span>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group has-feedback">
              <input type="password" placeholder="{{ trans('frontend.retype_password') }}" class="form-control" id="retypepassword" name="retypepassword">
              <span class="fa fa-lock form-control-feedback"></span>
            </div>
          </div>
        </div>

        <div class="form-group has-feedback">
          <input type="text" placeholder="{{ ucfirst(trans('frontend.secret_key')) }}" class="form-control" id="secret_key" name="secret_key">
          <span class="fa fa-lock form-control-feedback"></span>
        </div>

        @if(!empty($is_enable_recaptcha) && $is_enable_recaptcha == true)
        <div class="form-group">
          <div class="captcha-style">{!! app('captcha')->display(); !!}</div>
        </div>
        @endif

        <hr class="colorgraph">
        <div class="row">
          <div class="col-xs-12 col-md-6"><input name="user_reg_submit" id="user_reg_submit" class="btn btn-secondary btn-block btn-md" value="{{ trans('frontend.registration') }}" type="submit"> </div>
          <div class="col-xs-12 col-md-6"><a href="{{ route('user-login-page') }}" class="btn btn-secondary btn-block btn-md user-reg-log-in-text">{{ trans('frontend.signin_account_label') }}</a></div>
        </div>
      </form>
    </div>
  </div>
</div>
@else
<br>
<p>{{ trans('frontend.user_reg_not_available_label') }}</p>
@endif
<br>
<br>
</div>
@endsection

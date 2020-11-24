@extends('layouts.admin.install')
@section('title', trans('frontend.retrieve_password') .' < '. get_site_title() )
@section('content')


<!-- <div class="breadcrumbs_area">
<div class="container">
<div class="row">
<div class="col-12">
<div class="breadcrumb_content">
<ul>
<li><a href="index.php">home</a></li>
<li>Reset Password</li>
</ul>
</div>
</div>
</div>
</div>
</div> -->

<br><br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12 col-lg-4 text-center">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="text-center">
            <img src="{{ URL::asset('public/images/forgot-password.png') }}">

            <h3 class="text-center">{{ trans('frontend.forgot_password') }}</h3>


              <div class="panel-body">

                @include('pages-message.notify-msg-error')
                @include('pages-message.form-submit')

                <form method="post" action="{{ route('vendor-forgotPassword') }}" enctype="multipart/form-data">
                  @include('includes.csrf-token')
                  <fieldset>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                        <input id="vendor_forgot_pass_email_id" placeholder="{{ trans('frontend.email_address') }}" class="form-control" type="email" name="vendor_forgot_pass_email_id">
                      </div>
                    </div>

                    <!--<div class="form-group">-->
                    <!--  <div class="input-group">-->
                    <!--    <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>-->
                    <!--    <input id="vendor_forgot_new_password" placeholder="{{ trans('frontend.new_password') }}" class="form-control" type="password" name="vendor_forgot_new_password">-->
                    <!--  </div>-->
                    <!--</div>-->

                    {{-- <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                        <input id="secretKeyInput" placeholder="{{ trans('frontend.secret_key') }}" class="form-control" type="text" name="secretKeyInput">
                      </div>
                    </div> --}}

                    <div class="row">
                      <div class="col-6">
                        <a class="btn btn-primary btn-block btn-sm" href="{{ route('vendor.login')}}">{!! trans('admin.back_to_login_label') !!}</a>
                      </div>
                      <div class="col-6">
                        <input class="btn btn-primary btn-block btn-sm" value="{{ trans('frontend.reset_my_password') }}" type="submit">
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

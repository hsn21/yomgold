@extends('layouts.frontend.master')
@section('title', trans('frontend.frontend_user_forgot_password') .' - '. get_site_title())
@section('content')
<div class="breadcrumbs_area">
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
</div>

<div class="login_page_bg">

<div class="container"><br>  
  <div class="row justify-content-center">
    <div class="col-md-6 text-center">
      <div class="panel panel-login">
        <div class="panel-heading">
          <div class="row justify-content-center">
            <div class="col-xs-12 text-center">
              <h3>{{ trans('frontend.forgot_password') }}</h3>
              
            </div>
          </div>
         
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              @include('pages-message.notify-msg-error')
              @include('pages-message.form-submit')
              
              <form method="post" action="" enctype="multipart/form-data">
                @include('includes.csrf-token')
                
                <div class="form-group has-feedback">
                  <input type="email" placeholder="{{ ucfirst( trans('frontend.email') ) }}" class="form-control" id="user_forgot_pass_email_id"name="user_forgot_pass_email_id">
                  <span class="fa fa-envelope form-control-feedback"></span>
                </div>

               

               

                <div class="form-group">
                  <div class="row justify-content-center">
                    <div class="col-sm-6 text-center">
                      <input name="user_forgot_pass_submit" id="user_forgot_pass_submit" class="form-control btn btn-secondary" value="{{ trans('frontend.reset_my_password') }}" type="submit">
                    </div>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
<br>
<br>
</div>
@endsection  
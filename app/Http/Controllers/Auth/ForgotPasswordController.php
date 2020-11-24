<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Request;
use Validator;
use App\Models\Option;
use App\Models\VendorPackage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use App\Library\CommonFunction;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Str;
use App\Library\GetFunction;
use App\Http\Controllers\OptionController;
use Illuminate\Support\Facades\App;



class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset with emails and secret key
    |
    */
     public $CommonFunction;
     public $product;
     
    public $classCommonFunction;
    public $classGetFunction;
    public $option;
    public $env;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('verifyLoginPage');
      $this->classCommonFunction  = new CommonFunction();
      $this->product  = new ProductsController();

$this->classCommonFunction = new CommonFunction();
      $this->classGetFunction = new GetFunction();
      $this->option = new OptionController();
      $this->env = App::environment();

    }
    
  /**
   * 
   * Redirect to forgot page
   *
   * @param null
   * @return response
   */
  public function redirectForgotPassword(){ 
    if(Request::is('admin/forgot-password')){
      $this->classCommonFunction->set_admin_lang();
      return view('pages.auth.forgot-password');
    }
    elseif(Request::is('user/forgot-password')){
      $this->classCommonFunction->set_frontend_lang();
      
      $data = array(); 
      
      $data['target'] = 'empty_check';
      $get_data = $this->classCommonFunction->get_dynamic_frontend_content_data( $data );
      
      return view('pages.auth.user-forgot-password')->with($get_data);
    }
    elseif(Request::is('vendor/forgot-password')){
      $this->classCommonFunction->set_frontend_lang();
      
      $data   = array(); 
      
      $data['target'] = 'empty_check';
      $get_data = $this->classCommonFunction->get_dynamic_frontend_content_data( $data );
      
      return view('pages.auth.vendor-forgot-password')->with($get_data);
    }
  }
  
  /**
   * 
   * Save forgot post data
   *
   * @param null
   * @return response
   */
  public function postForgotPassword(){
    if( Request::isMethod('post') && Session::token() == Request::get('_token') ){
      
      $data = Request::all();
      
      $rules = [
        'forgotEmailInput'                  => 'required|email',
        'resetPasswordInput'                => 'required|min:5',
        'secretKeyInput'                    => 'required'
      ];
      
      $messages = [
        'forgotEmailInput.required' => Lang::get('validation.email_required'),
        'forgotEmailInput.email' => Lang::get('validation.email_is_email'),
        'resetPasswordInput.required' => Lang::get('validation.new_password_required'),
        'secretKeyInput.required' => Lang::get('validation.secret_key_required')
      ];
      
      $validator = Validator:: make($data, $rules, $messages);
      
      if($validator->fails()){
        return redirect()-> back()
        ->withInput(Request::except('resetPasswordInput'))
        ->withErrors( $validator );
      }
      else{
         $User =       new User;
       
         $userdata  = ['email' => Request::get('forgotEmailInput')];
         
         $get_key   = $User::where($userdata)->first();
         $data      = $User::where($userdata)->get()->count();
         $_key      = bcrypt(Request::get('secretKeyInput')); 
        
         if($data>0 && isset($get_key->secret_key) && Hash::check(Request::get('secretKeyInput'), $_key) && Hash::check(Request::get('secretKeyInput'), $get_key->secret_key)){
           if($User :: where('email', Request::get('forgotEmailInput'))->update(['password' => bcrypt(Request::get('resetPasswordInput'))])){
             return redirect()->route('admin.login');
           }
         }
         else{
           Session::flash('error-message', Lang::get('admin.authentication_failed_with_email_secret'));
           return redirect()-> back();
         }
      }
    }
    else {
      return redirect()-> back();
    }
  }
  
  /**
   * 
   * Manage user forgot password page
   *
   * @param null
   * @return void
   */
  public function manageFrontendUserForgotPassword(){
    if( Request::isMethod('post') && Session::token() == Request::get('_token') ){
      
      $data = Request::all();
      
      $rules = [
        'user_forgot_pass_email_id'                  => 'required|email'
       
       
      ];
      
      $messages = [
        'user_forgot_pass_email_id.required' => Lang::get('validation.email_required'),
        'user_forgot_pass_email_id.email' => Lang::get('validation.email_is_email'),
        
       
      ];
      
      $validator = Validator:: make($data, $rules, $messages);
      
      if($validator->fails()){
        return redirect()-> back()
        ->withInput(Request::except('user_forgot_new_password'))
        ->withErrors( $validator );
      }
      else{
         $User =       new User;
       
         $userdata  = ['email' => Request::get('user_forgot_pass_email_id')];
         
         $get_key   = $User::where($userdata)->first();
         $data      = $User::where($userdata)->get()->count();
        
        
         if($data>0 ){

      $hash_pass_n=Str::random(10);


           if($User :: where('email', Request::get('user_forgot_pass_email_id'))->update(['password' => bcrypt($hash_pass_n)])){

if( $this->env === 'production'){
                  $this->classGetFunction->sendCustomMail( array('source' => 'forgot_user_email', 'new_password' => $hash_pass_n, 'email' => Request::get('user_forgot_pass_email_id')) );


                }

             Session::flash('success-message', Lang::get('frontend.new_password_updated'));
             return redirect()->route('user-login-page');
           }
         }
         else{
           Session::flash('error-message', Lang::get('admin.authentication_failed_with_email_secret'));
           return redirect()-> back();
         }
      }
    }
    else {
      return redirect()-> back();
    }
  }
  
  /**
   * 
   * Manage vendor forgot password page
   *
   * @param null
   * @return void
   */
  public function manageVendorForgotPassword(){
    if( Request::isMethod('post') && Session::token() == Request::get('_token') ){

      $data = Request::all();

      $rules = [
        'vendor_forgot_pass_email_id'             => 'required|email',

      ];

      $messages = [
        'vendor_forgot_pass_email_id.required' => Lang::get('validation.email_required'),
        'vendor_forgot_pass_email_id.email' => Lang::get('validation.email_is_email'),


      ];

      $validator = Validator:: make($data, $rules, $messages);

      if($validator->fails()){
        return redirect()-> back()
        ->withInput(Request::except('vendor_forgot_new_password'))
        ->withErrors( $validator );
      }
      else{
         $User =       new User;

         $userdata  = ['email' => Request::get('vendor_forgot_pass_email_id')];

         $get_key   = $User::where($userdata)->first();
         $data      = $User::where($userdata)->get()->count();
         $get_user_role =  get_user_details( $get_key->id );


         if($data>0 && isset($get_user_role['user_role_slug']) && ($get_user_role['user_role_slug'] == 'vendor') ){
             
             $hash_pass_n=Str::random(10);
             
           if($User :: where('email', Request::get('vendor_forgot_pass_email_id'))->update(['password' => bcrypt(Request::get($hash_pass_n))])){
               
               if( $this->env === 'production'){
                   
                    $this->classGetFunction->sendCustomMail( array('source' => 'forgot_user_email', 'new_password' => $hash_pass_n, 'email' => Request::get('vendor_forgot_pass_email_id')) );
                   
               }
            
               


              

             Session::flash('success-message',  'Your new password successfully updated, Check Your Email For New Password');
             return redirect()->route('vendor.login');
           }
         }
         else{
           Session::flash('error-message', 'Vendor Authentication Failed ! Please Check Your Credentials');
           return redirect()-> back();
         }
      }
    }
    else {
      return redirect()-> back();
    }
  }
}
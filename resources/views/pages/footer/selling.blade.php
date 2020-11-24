<!doctype html>
<html class="no-js" lang="en">
<head>

    <title>Become a Seller</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('public/page/img/favicon.ico') }}">

    <!-- CSS
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href=" {{ URL::asset('public/page/css/plugins.css') }}  ">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="  {{ URL::asset('public/page/css/style.css') }}">

</head>

<body>

    <!--header area start-->

    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>
    <div class="offcanvas_menu offcanvas_two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="call_support">
                            <p><i class="icon-phone-call" aria-hidden="true"></i> <span>Call us: <a href="tel:+(+800)456789">(+800) 456 789</a></span></p>

                        </div>
                        <div class="header_account">
                            <ul>
                                <li><a href="#">Career <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Arabic</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <div class="header_account">
                            <ul>
                                <li class="language"><a href="#"><img src="{{ URL::asset('page/img/logo/language.png') }}" alt="image"> Country <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">Dubai</a></li>
                                        <li><a href="#">Saudi Arabia</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <div class="header_top_links">
                            <ul>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">Inquiry</a></li>
                                <li><a href="#">24 Hour Live Help</a></li>
                                <li><a href="#">Online Support</a></li>
                            </ul>
                        </div>
                        <div class="search_container">
                            <form action="#">
                               <div class="hover_category">
                                    <select class="select_option" name="select" id="categori1">
                                        <option selected value="1">All Categories</option>
                                        <option value="2"> Body Parts</option>
                                        <option value="3"> Car engine</option>
                                        <option value="4"> Interiors</option>
                                        <option value="5"> Lighting & lamp</option>
                                        <option value="6"> Repair Parts</option>
                                        <option value="7"> Smart Devices</option>
                                        <option value="8"> Wheels & Tires</option>
                                        <option value="9"> Smart Devices</option>

                                    </select>
                               </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="header_configure_area">
                            <div class="header_wishlist">
                                <a href="#"><i class="icon-heart"></i>
                                    <span class="wishlist_count">3</span>
                                </a>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)">
                                    <i class="icon-shopping-bag2"></i>
                                    <span class="cart_price">AED-152.00 <i class="ion-ios-arrow-down"></i></span>
                                    <span class="cart_count">2</span>
                                </a>
                                <!--mini cart-->
                                <div class="mini_cart">
                                    <div class="mini_cart_inner">
                                        <div class="cart_item">
                                           <div class="cart_img">
                                               <a href="#"><img src="{{ URL::asset('page/img/s-product/product.jpg') }}" alt=""></a>
                                           </div>
                                            <div class="cart_info">
                                                <a href="#">Fusce Aliquam</a>
                                                <p>Qty: 1 X <span> AED-60.00 </span></p>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart_item">
                                           <div class="cart_img">
                                               <a href="#"><img src=" {{ URL::asset('page/img/s-product/product2.jpg') }} " alt=""></a>
                                           </div>
                                            <div class="cart_info">
                                                <a href="#">Ras Neque Metus</a>
                                                 <p>Qty: 1 X <span> AED-60.00 </span></p>
                                            </div>
                                            <div class="cart_remove">
                                                <a href="#"><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="mini_cart_table">
                                            <div class="cart_total">
                                                <span>Sub total:</span>
                                                <span class="price">AED-138.00</span>
                                            </div>
                                            <div class="cart_total mt-10">
                                                <span>total:</span>
                                                <span class="price">AED-138.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mini_cart_footer">
                                       <div class="cart_button">
                                            <a href="#">View cart</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="#">Checkout</a>
                                        </div>

                                    </div>
                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">About Us</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Spare Parts</a>


                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Career </a>

                                </li>

                                <li class="menu-item-has-children">
                                    <a href="#"> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@amirspareparts.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->

    <header>
        <div class="main_header header_two">
            header top start
            <div class="header_top">
               <div class="container px-5">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-5">
                            <div class="header_account">
                                <!--<ul>-->
                                <!--    <li><a href="#"> Solutions <i class="ion-chevron-down"></i></a>-->
                                <!--        <ul class="dropdown_language">-->
                                <!--            <li><a href="#">Sell on Amazon</a></li>-->
                                <!--            <li><a href="#">Fulfillment by Amazon</a></li>-->
                                <!--            <li><a href="#">Advertise on Amazon</a></li>-->
                                <!--            <li><a href="#">Selling Services</a></li>-->
                                <!--        </ul>-->
                                <!--    </li>-->
                                <!--    <li class="mx-4"><a href="#">Support<i class="ion-chevron-down"></i>-->
                                <!--    </a>-->
                                <!--        <ul class="dropdown_language">-->
                                <!--            <li><a href="#">Sellar Education</a></li>-->
                                <!--            <li><a href="#">Webinar & Events</a></li>-->
                                <!--        </ul>-->
                                <!--    </li>-->
                                <!--    <li><a href="#">Contact Us</a></li>-->
                                <!--</ul>-->
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-7">
                            <div class="header_account text-right">
                            <ul>
                                <li class="mr-5"><a href="{{ route('vendor.login') }}">Sign into your Seller Account</a></li>
                                <li class="language"><a href="#"><img src="{{ URL::asset('page/img/logo/language.png') }}" alt=""> Country <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">Dubai</a></li>
                                        <li><a href="#">Saudi Arabia</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->

            <!--header middel start-->
            <div class="header_middle h_middle_two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="#"><img src="{{ URL::asset('page/img/logo/logo2.png') }}" alt=""></a>
                            </div>
                        </div>
       <div class="logo" style="margin-right:112px;margin-left: 29px">



                                  @if(get_site_logo_image())
                                <a href="{{route('home-page')}}"><img src="{{URL::asset('public/uploads/1596976672-h-40-Yom-Gold-Logo.png') }}" width="125px" title="{{ trans('frontend.your_store_label') }}" alt="{{ trans('frontend.your_store_label') }}"></a>
                                @endif
</div>
                            <div class="main_menu menu_two menu_position text-right" style='margin-left: 400px;'>
                                <nav>
                                  
                                    <ul>
                                        

                                        <li class="selling-btn"><a href="{{ route('vendor.login') }}">Start Selling</a></li>
                                    </ul>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->

        </div>
    </header>
    <!--header area end-->


   <section class="bg-blue">
       <div class="container px-5 py-4">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Register to become a new seller today and pay no monthly subscription on Professional accounts for a limited period only.</h2>
                <a href=""> Sign Up Now</a>
            </div>

        </div>

       </div>
   </section>

   <section class="bg-aqua">
       <div class="container px-5 py-4">
        <div class="row">
            <div class="col-md-6 pt-5 pl-5">
                <h1>Start selling on Yom Gold today</h1>
                <div class="start-selling">
                    <a class="button" href="{{ route('vendor.login') }}">Start Selling</a>
                </div>
            </div>
            <div class="col-md-4 offset-2 bg-aqua-pic">

            </div>

        </div>
       </div>
   </section>

    <section class="my-5">
       <div class="container px-5">
        <div class="row ">
            <div class="col-md-3 pl-5">
                <div class=" bg-sell align-items-center"></div>

            </div>
            <div class="col-md-9 pt-5 para">
                <h2>Get started selling today</h2>
                <p>When you sell on yom gold, you can reach millions of shoppers and make your products easier to find and easier to buy. No need to pay big marketing budgets.</p>

            </div>

        </div>
       </div>
    </section>

    <section class="bg-gray py-5">
       <div class="container px-5">
        <div class="row ">
            <div class="col-md-8 pt-5 para">
                <h2>Reach millions</h2>
                <p class="mb-0">Whether you are a new business start-up or you want to increase your existing business sales, working online with yom gold helps you achieve your goals.</p>
                <p>All our selling partners work with yom gold for a reason: 300 million customers shop our stores worldwide.</p>
            </div>
            <div class="col-md-4">
                <div class=" bg-reach align-items-center"></div>
            </div>

        </div>
       </div>
    </section>

    <section class="py-5">
       <div class="container px-5">
        <div class="row ">
            <div class="col-md-4 pr-3">
                <div class=" bg-money align-items-center"></div>

            </div>
            <div class="col-md-8 pt-5 para">
                <h2>Make money</h2>
                <p>The cost to sell in yom gold stores depends on which category of products you sell, and how you plan to fulfill orders. The options are flexible, so you can find the combo that works best for you and your goals.</p>
                <p> In 2018, 58% of sold units on yom gold globally were from yom gold selling partners.<a href="{{ route('vendor.login') }}" style="color:#008296"> Become an yom gold seller today.</a></p>

            </div>

        </div>
       </div>
    </section>

    <section class="bg-gray py-4">
       <div class="container px-5">
        <div class="row ">
            <div class="col-md-8 pt-5 para">
                <h2>Deliver Smiles</h2>
                <p class="mb-0">Leave the shipping, returns and customer service to us with Fulfillment by yom gold (FBA).</p>
                <p>Want to take care of shipping yourself? You can do that too.</p>
                <p><a href="#" style="color:#008296">Explore Shipping Solutions</a></p>
            </div>
            <div class="col-md-4">
                <div class="bg-delivery align-items-center"></div>
            </div>

        </div>
       </div>
    </section>

    <section class="bg-blue">
       <div class="container px-5 py-4">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="bg-customer" ></div>
            </div>
            <div class="col-md-8">
                <h1>Need help registering?</h1>
                <p>Professional services to help you through every step of selling online.</p>
                <div class="start-selling">
                    <a class="button" href="{{ route('vendor.login') }}">Start Selling</a>
                </div>
            </div>

        </div>
       </div>
   </section>


    <!--newsletter area start-->
    <div class="newsletter_area">
        <div class="container">
            <div class="newsletter_inner">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="newsletter_container">
                            <h3>Follow Us</h3>
                            <p>We make consolidating, marketing and tracking your social media website easy.</p>
                            <div class="footer_social">
                               <ul>
                                   <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                                   <li><a class="twitter" href="#"><i class="icon-twitter2"></i></a></li>
                                   <li><a class="rss" href="#"><i class="icon-rss"></i></a></li>
                                   <li><a class="youtube" href="#"><i class="icon-youtube"></i></a></li>
                                   <li><a class="google" href="#"><i class="icon-google"></i></a></li>
                                   <li><a class="instagram2" href="#"><i class="icon-instagram2"></i></a></li>
                               </ul>
                           </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <div class="newsletter_container">
                            <h3>Newsletter Now</h3>
                            <p>Join 60.000+ subscribers and get a new discount coupon on every Wednesday.</p>
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter" >
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email address here..." />
                                    <button id="mc-submit">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--newsletter area end-->

<footer class="footer_widgets">
            <!--shipping area start-->

            <!--shipping area end-->
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widgets_container">
                                <h3>CONTACT INFO</h3>
                                <div class="footer_contact">
                                   <div class="footer_contact_inner">
                                        <div class="contact_icone">
                                            <img src="{{ URL::asset('public/page/img/icon/icon-phone.png') }}" alt="">
                                        </div>
                                        <div class="contact_text">
                                            <p>Hotline Free 24/24: <br> <strong><a href="tel:+(+800)123456789">(+970) 123 456 789</a> </strong></p>
                                        </div>
                                    </div>
                                    <p>Consectetuer sociis mauris eu augue velit pulvinar ullamcorper in ac mauris ac vel, interdum sed malesuada curae sit amet non nec quis arcu massa..</p>
                                    <p>The Barn, Henley in Dubai B578. Support@asp.com.ae</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                           <div class="footer_col_container">
                                <div class="widgets_container widget_menu">
                                    <h3>About Us</h3>
                                    <div class="footer_menu">
                                        <ul>
                                           

                                        </ul>
                                    </div>
                                </div>
                                <div class="widgets_container widget_menu">
                                    <h3>Delivery Information</h3>
                                    <div class="footer_menu">
                                        <ul>
                                          
                                        </ul>
                                    </div>
                                </div>
                                <div class="widgets_container widget_menu">
                                    <h3>New products</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="widgets_container widget_menu">
                                    <h3>Best sales</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="widgets_container widget_menu">
                                    <h3>My Account</h3>
                                    <div class="footer_menu">
                                        <ul>
                                            <li><a href="{{ route('footer.selling') }}">Sell On Yom Gold</a></li>
                                             
                                      
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright_area">
                                <p>Copyright &copy; 2020 <a href="#">Yom Gold</a>  All Right Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6" style="text-align: right;">
                            <div class="copyright_area">
                                <p>Designed By : FUTURE VALLEY.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ URL::asset('page/img/product/productbig1.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ URL::asset('page/img/product/productbig2.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ URL::asset('page/img/product/productbig3.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ URL::asset('page/img/product/productbig4.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ URL::asset('page/img/product/product2.jpg') }}" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{ URL::asset('page/img/product/product6.jpg') }}" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{ URL::asset('page/img/product/product9.jpg') }}" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{ URL::asset('page/img/product/product3.jpg') }}" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Sit voluptatem rhoncus sem lectus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">AED-64.99</span>
                                        <span class="old_price" >AED-78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option">
                                               <option selected value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->


<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="{{ URL::asset('public/page/js/plugins.js') }}"></script>
<!-- Main JS -->
<script src=" {{ URL::asset('public/page/js/main.js') }}"></script>

</body>
</html>

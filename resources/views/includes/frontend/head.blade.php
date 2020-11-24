<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>YomGold</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    {{-- <link rel="stylesheet" href="{{asset ('public/vendor/bootstrap/css/bootstrap.css')}}"> --}}
    <link rel="stylesheet" href="{{asset ('public/vendor/owl-carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset ('public/vendor/photoswipe/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset ('public/vendor/photoswipe/default-skin/default-skin.css')}}">
    <link rel="stylesheet" href="{{asset ('public/vendor/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset ('public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset ('public/css/style.header-spaceship-variant-one.css')}}">
    <link rel="stylesheet" href="{{asset ('public/css/style.mobile-header-variant-one.css')}}">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="{{asset ('public/vendor/fontawesome/css/all.min.css')}}">




@if((Request::is('product/details/*') || Request::is('product/customize/*')) && !empty($single_product_details['meta_keywords']))
<meta name="keywords" content="{{ $single_product_details['meta_keywords'] }}">

@elseif( Request::is('blog/*') && !empty($blog_details_by_slug['meta_keywords']))
<meta name="keywords" content="{{ $blog_details_by_slug['meta_keywords'] }}">

@elseif((Request::is('store/details/home/*') || Request::is('store/details/products/*') || Request::is('store/details/reviews/*') || Request::is('store/details/cat/products/*')) && !empty($store_seo_meta_keywords))
<meta name="keywords" content="{{ $store_seo_meta_keywords }}">

@elseif(!empty($seo_data) && $seo_data['meta_tag']['meta_keywords'])
<meta name="keywords" content="{{ $seo_data['meta_tag']['meta_keywords']}}">
@endif

@if(!empty($seo_data) && $seo_data['meta_tag']['meta_description'])
<meta name="description" content="{{ $seo_data['meta_tag']['meta_description'] }}">
@endif

@if((Request::is('product/details/*') || Request::is('product/customize/*')) && !empty($single_product_details['_product_seo_description']))
<meta name="description" content="{{ $single_product_details['_product_seo_description'] }}">
@endif

@if((Request::is('product/details/*') || Request::is('product/customize/*')) && !empty($single_product_details['post_slug']))
<link rel="canonical" href="{{ route('details-page', $single_product_details['post_slug']) }}">
@endif

@if(Request::is('blog/*') && !empty($blog_details_by_slug['blog_seo_description']))
<meta name="description" content="{{ $blog_details_by_slug['blog_seo_description'] }}">
@endif

@if(Request::is('blog/*') && !empty($blog_details_by_slug['blog_seo_url']))
<link rel="canonical" href="{{ route('blog-single-page', $blog_details_by_slug['blog_seo_url']) }}">
@endif

@if((Request::is('store/details/home/*') || Request::is('store/details/products/*') || Request::is('store/details/reviews/*') || Request::is('store/details/cat/products/*')) && !empty($store_seo_meta_description))
<meta name="description" content="{{ $store_seo_meta_description }}">
@endif



<link rel="stylesheet" href="{{ asset('public/plugins/datatable/dataTables.bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{ asset('public/plugins/datatable/responsive.bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{ asset('public/sweetalert/sweetalert.css') }}" />
<link rel="stylesheet" href="{{ asset('public/plugins/select2/select2.min.css') }}" />
<link rel="stylesheet" href="{{ asset('public/dropzone/css/dropzone.css') }}" />
<link rel="stylesheet" href="{{ asset('public/designer/designer.css') }}" />
<link rel="stylesheet" href="{{ asset('public/designer/scroll/jquery.mCustomScrollbar.css') }}" />
<link rel="stylesheet" href="{{ asset('public/plugins/ionslider/ion.rangeSlider.css') }}" />
<link rel="stylesheet" href="{{ asset('public/plugins/ionslider/ion.rangeSlider.skinModern.css') }}" />
<link rel="stylesheet" href="{{ asset('public/plugins/bootstrap-slider/slider.css') }}" />
<link rel="stylesheet" href="{{ asset('public/frontend/css/common.css') }}" />
<link rel="stylesheet" href="{{ asset('public/frontend/css/price-range.css') }}" />
<link rel="stylesheet" href="{{ asset('public/plugins/iCheck/square/purple.css') }}" />
<link rel="stylesheet" href="{{ asset('public/modal/css/modal.css') }}" />
<link rel="stylesheet" href="{{ asset('public/modal/css/modal-extra.css') }}" />
<link rel="stylesheet" href="{{ asset('public/slick/slick.css') }}" />
<link rel="stylesheet" href="{{ asset('public/slick/slick-theme.css') }}" />




<!-- fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
<!-- css -->
<link rel="stylesheet" href="{{ asset('public/web/vendor/bootstrap/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('public/web/vendor/owl-carousel/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/web/vendor/photoswipe/photoswipe.css') }}">
<link rel="stylesheet" href="{{ asset('public/web/vendor/photoswipe/default-skin/default-skin.css') }}">
<link rel="stylesheet" href="{{ asset('public/web/vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/web/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('public/web/css/style.header-classic-variant-one.css') }}" media="(min-width: 1200px)">
<link rel="stylesheet" href="{{ asset('public/web/css/style.mobile-header-variant-one.css') }}" media="(max-width: 1199px)">
<!-- font - fontawesome -->
<link rel="stylesheet" href="{{ asset('public/web/vendor/fontawesome/css/all.min.css') }}">





<script type="text/javascript" src="{{ asset('public/jquery/jquery-1.10.2.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/jquery/jquery-ui-1.11.4.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/dropzone/dropzone.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/bootstrap/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/plugins/datatable/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/plugins/datatable/dataTables.responsive.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/plugins/datatable/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/jquery.scrollUp.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/sweetalert/sweetalert.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/plugins/select2/select2.full.min.js') }}"></script>

@if(Request::is('product/customize/*'))
<script type="text/javascript" src="{{ asset('public/designer/fabric-1.5.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/designer/customiseControls.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/designer/fabric.curvedText.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/designer/jsPDF.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/designer/designer.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/designer/designerControl.js') }}"></script>
@endif

<script type="text/javascript" src="{{ asset('public/designer/colorpicker/jscolor.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/designer/scroll/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/plugins/ionslider/ion.rangeSlider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/plugins/bootstrap-slider/bootstrap-slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/products-variation.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/products-add-to-cart.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/price-range.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/plugins/iCheck/icheck.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/modal/js/modal.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/jquery.validate.js') }}"></script>


<script type="text/javascript" src="{{ asset('public/templates-assets/footer/black-crazy/script.js') }}"></script>

<!--load header scripts-->
<script type="text/javascript" src="{{ asset('public/templates-assets/header/'. $appearance_settings['header'] .'/script.js') }}"></script>

<!--load home scripts-->
<script type="text/javascript" src="{{ asset('public/templates-assets/home/'. $appearance_settings['home'] .'/script.js') }}"></script>

<!--load blogs scripts-->
<script type="text/javascript" src="{{ asset('public/templates-assets/blog/'. $appearance_settings['blogs'] .'/script.js') }}"></script>

<!--load products scripts-->
<script type="text/javascript" src="{{ asset('public/templates-assets/product/'. $appearance_settings['products'] .'/script.js') }}"></script>

<!--load single products scripts-->
<script type="text/javascript" src="{{ asset('public/templates-assets/single-product/'. $appearance_settings['single_product'] .'/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/templates-assets/single-product/'. $appearance_settings['single_product'] .'/jquery.elevatezoom.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/frontend/js/common.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/frontend/js/social-network.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/common/base64.js') }}"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>



<script src="{{asset('public/web/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{asset('public/web/vendor/nouislider/nouislider.min.js') }}"></script>
<script src="{{asset('public/web/vendor/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{asset('public/web/vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
<script src="{{asset('public/web/vendor/select2/js/select2.min.js') }}"></script>
<script src="{{asset('public/web/js/number.js') }}"></script>
<script src="{{asset('public/web/js/main.js') }}"></script>




</head>

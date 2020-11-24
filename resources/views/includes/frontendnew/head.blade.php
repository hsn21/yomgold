<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>YomGold</title>
    <link rel="icon" type="image/png" href="images/favicon.png')}}">
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">
    <!-- css -->
    <link rel="stylesheet" href="{{asset('public/templates-assets/home/theme/vendor/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/templates-assets/home/theme/vendor/owl-carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/templates-assets/home/theme/vendor/photoswipe/photoswipe.css')}}">
    <link rel="stylesheet" href="{{asset('public/templates-assets/home/theme/vendor/photoswipe/default-skin/default-skin.css')}}">
    <link rel="stylesheet" href="{{asset('public/templates-assets/home/theme/vendor/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/templates-assets/home/theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/templates-assets/home/theme/css/style.header-spaceship-variant-one.css')}}" media="(min-width: 1200px)">
    <link rel="stylesheet" href="{{asset('public/templates-assets/home/theme/css/style.mobile-header-variant-one.css')}}" media="(max-width: 1199px)">
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="{{asset('public/templates-assets/home/theme/vendor/fontawesome/css/all.min.css')}}">






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


@if(Request::is('product/customize/*'))
<script type="text/javascript" src="{{ asset('public/designer/fabric-1.5.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/designer/customiseControls.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/designer/fabric.curvedText.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/designer/jsPDF.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/designer/designer.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/designer/designerControl.js') }}"></script>
@endif


<script src="{{asset('public/templates-assets/home/theme/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/templates-assets/home/theme/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/templates-assets/home/theme/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/templates-assets/home/theme/vendor/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('public/templates-assets/home/theme/vendor/photoswipe/photoswipe.min.js')}}"></script>
    <script src="{{asset('public/templates-assets/home/theme/vendor/photoswipe/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('public/templates-assets/home/theme/vendor/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('public/templates-assets/home/theme/js/number.js')}}"></script>
    <script src="{{asset('public/templates-assets/home/theme/js/main.js')}}"></script>

</head>
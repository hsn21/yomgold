

<div class="mini_cart_wrapper">
<a href="javascript:void(0)">
<i class="icon-shopping-bag2"></i>
<span class="cart_price">{!! price_html( get_product_price_html_by_filter(Cart::getTotal()) ) !!} <i class="ion-ios-arrow-down"></i></span>
<span class="cart_count">{!! Cart::count() !!}</span>
</a>
<!--mini cart-->
<div class="mini_cart">
    @if( Cart::count() >0 )
<div class="mini_cart_inner">


@foreach(Cart::items() as $index => $items)
<div class="cart_item">
<div class="cart_img">
  @if($items->img_src)  
            <a href="{{ route('details-page', get_product_slug($items->id)) }}"><img src="{{ get_image_url($items->img_src) }}" alt="product"></a>
            @else
            <a href="{{ route('details-page', get_product_slug($items->id)) }}"><img src="{{ default_placeholder_img_src() }}" alt="no_image"></a>
            @endif
</div>
<div class="cart_info">
<a href="{{ route('details-page', get_product_slug($items->id)) }}">{!! $items->name !!}</a>



<p>Qty: {!! $items->quantity !!}x &nbsp; {!! price_html( get_product_price_html_by_filter( Cart::getRowPrice($items->quantity, get_role_based_price_by_product_id($items ->id, $items->price))) ) !!}</p>    
</div>
<div class="cart_remove">
<a href="{{ route('removed-item-from-cart', $index)}}"><i class="ion-android-close"></i></a>
</div>
</div>
 @endforeach
<div class="mini_cart_table">

<div class="cart_total mt-10">
<span>{!! trans('frontend.total') !!}:</span>
<span class="price">{!! price_html( get_product_price_html_by_filter(Cart::getTotal()) ) !!}</span>
</div>
</div>
</div>
<div class="mini_cart_footer">
<div class="cart_button">
<a href="{{ route('cart-page') }}">{!! trans('frontend.view_cart_label') !!}</a>
</div>
<div class="cart_button">
<a class="active" href="{{ route('checkout-page') }}">{!! trans('frontend.check_out') !!}</a>
</div>

</div>

 @else
      <h4 class="empty-cart-js">{!! trans('frontend.empty_cart_msg') !!}</h4>
      @endif
</div>
<!--mini cart end-->
</div>
@if(count($data['children'])>0)


<li class="has-sub">
  <a  data-toggle="collapse" data-parent="#spare-parts" href="#{{str_replace(' ', '-', $data['slug'])}}">
    <i class="fa fa-angle-right"></i> &nbsp; 
    
    <span>{!! $data['name'] !!}</span>
    <!-- <span class="pull-right">
                    <i class="fa fa-plus"></i>
                  </span> -->

  </a>

  <ul class="sub-menu collapse  <?php if($data['id'] == $product_by_cat_id['select_parent']){?>show<?php } ?>" id="{{str_replace(' ', '-', $data['slug'])}}">
  @foreach($data['children'] as $data1)
  <li>
  <a href="{{ route('categories-page', $data1['slug']) }}">
    <i class="fa fa-angle-right"></i> &nbsp; 
    <?php if($data1['id'] == $product_by_cat_id['cat_id']){?>
    <span class="active">{!! $data1['name'] !!}</span>
    <?php } else {?>
    <span>{!! $data1['name'] !!}</span>
    <?php }?>
  </a>
</li>
  @endforeach
  </ul>
</li>

@else
<li>
  <a href="{{ route('categories-page', $data['slug']) }}">
    <i class="fa fa-angle-right"></i> &nbsp; 
<?php if($data['id'] == $product_by_cat_id['cat_id']){?>
    <span class="active">{!! $data['name'] !!}</span>
    <?php } else {?>
    <span>{!! $data['name'] !!}</span>
    <?php }?>
  </a>
</li>
 @endif

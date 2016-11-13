@foreach($properties as $property)
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 rs_toppadder30 "
         data-value="1">
        <div class="rs_product_div">
            <div class="rs_featureddiv">En venta</div>
            <div class="rs_product_img">
                <img src="properties_images/{{$property->image}}" class="img-responsive" alt="">
                <div class="rs_overlay">
                    <div class="rs_overlay_inner">
                        <ul>
                            <li><a class="fancybox " data-fancybox-group="product"
                                   href="{{asset('images/product_big1.jpg')}}"
                                   title="{{$property->name}}"><i class="fa fa-eye"></i></a>
                            </li>
                            <li><a href="#" class=""><i class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="rs_product_price">
                    <h2>
                        <small>${{$property->price}}</small>
                    </h2>
                </div>
            </div>
            <div class="rs_product_detail">
                <h5><a href="/properties/{{$property->id}}">{{$property->name}}</a></h5>

                <div class="rs_rating">
                    <form>
                        <input value="5" type="number" class="rating" min=0 max=5 step=0.5
                               data-size="xs">
                    </form>
                </div>
            </div>
            <div class="rs_product_div_footer">
                <div class="rs_author_div">
                    <img src="{{asset('images/author1.jpg')}}" class="img-responsive" alt="">
                    <div>
                        <h4><a href="author_dashboard.html">Jashon Matt</a></h4>
                        <p><a href="#">PSD Templates</a></p>
                    </div>
                </div>
                <div class="rs_share">
                    <ul>
                        <li><a onclick="Eliminar({{$property->id}})"><i class="fa fa-eraser"></i> <span>12</span></a></li>
                        <li><a href="#"><i class="fa fa-comment"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="rs_pagination rs_toppadder40 rs_bottompadder40 text-center">
            {{$properties->links()}}
        </div>
    </div>
</div>
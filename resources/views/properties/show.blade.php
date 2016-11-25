@extends('master_page')
@section('content')

<!--Breadcrumb start-->
<div class="rs_pagetitle rs_toppadder40 rs_bottompadder40">
    <div class="rs_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page_title">
                    <h3 class="rs_bottompadder20">{{$property->name}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<div class="rs_graybg rs_toppadder60 rs_bottompadder70">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="rs_single_product_slider">
                    <ul class="pgwSlideshow">
                        <li><img src="{{asset('properties_images/'.$property->image)}}" alt=""></li>
                    </ul>
                </div>
                <div class="rs_single_product_btn_section rs_toppadder30 rs_bottompadder30">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="rs_btn_div">
                                <a href="#" class="rs_button rs_button_orange">buy now $24</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rs_buy_license_section">
                    <h4>Descripcion</h4>
                    <p>{{$property->description}}</p>
                    
                    <h4>Ubicacion</h4>
                    <p>Ultron HTML Template is design which is ideal as it is for minimalist, multipurpose, shop, web designer, freelancers creative agency sites, portfolio and photographer’s. The template comes with 49+ homepage design, custom color schemes and 124+ valid HTML files. The design is very elegant and modern, and also very easy to customize with 1170px grid. We hope so you will feel happy with them.</p>
                    <p>The Ultron template comes with super awesome color scheme but you can build your own color combinations with our style.css file. Also the Ultron supported professional slider, custom menus (normal and left side) and HTML5 CSS3 technology! Build your own online stores with our great shopping template today!</p>

                    
                    <div class="rs_btn_div">
                        <a href="#" class="rs_button rs_button_orange">${{$property->price}}</a>
                    </div>
                </div>
                <div class="rs_single_product_tab_section">
                    <div class="rs_tab_wrapper">
                        <div class="rs_upper_tabwrapper">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#comments" data-toggle="tab">Comments</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="rs_single_product_tab_detail">
                        <div class="tab-content">
                            <div class="tab-pane active" id="comments">
                                <div class="rs_author_comments_show">
                                    <ol class="comment">
                                        <li>
                                            <div class="rs_commentdiv">
                                                <div class="rs_comment_img">
                                                    <img src="{{asset('images/user.png')}}" class="img-responsive" alt="">
                                                </div>
                                                @foreach($comments as $comment)
                                                @if($comment->property_id == $property->id)
                                                <div class="rs_comment_data">
                                                    <h5>{{$comment->user->name}}</h5>
                                                    <a href="/deleteComment/{{$comment->property_id}}"><i class="fa fa-flag"></i> report</a>
                                                    <p>{{$comment->content}}</p>
                                                </div>
                                                @endif
                                                @endforeach 
                                            </div>

                                        </li>
                                        <ol>
                                            <li class="rs_reply_box">
                                                <div class="rs_commentdiv">
                                                    <div class="rs_comment_img">
                                                        <img src="{{asset('images/author2.jpg')}}" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="rs_comment_data">
                         <form class="form-horizontal" role="form" method="POST" action="{{ url('/createComment') }}">
                        {{ csrf_field() }}

                                                            <div class="form-group">
                                                                <textarea name="content" id="content" class="form-control" rows="3" placeholder="Write your reply here..."></textarea>
                                                            </div>
                                                            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                                            <input type="hidden" id="property_id" name="property_id" value="{{ $property->id }}">
                                                            <div class="rs_reply_checkbox">
                                                                <div class="rs_checkbox">

                                                                    
                                                                <div class="rs_btn_div">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Reply
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </ol>
                                </div>
                            </div>
                            <div class="tab-pane" id="rating">
                                <div class="rs_rating_section">
                                    <h4>Buyers Rating:</h4>
                                    <ul>
                                        <li><p>34<span>Ratings</span></p></li>
                                        <li><p>4.0<span>Ratings</span></p></li>
                                        <li>
                                            <div class="rs_rating">
                                                <form>
                                                    <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="rs_progress_bar">
                                        <span> 5 Stars</span><progress value="26" max="100"></progress> <p>26</p>
                                        <span> 4 Stars</span><progress value="4" max="100"></progress> <p>4</p>
                                        <span> 3 Stars</span><progress value="1" max="100"></progress> <p>1</p>
                                        <span> 2 Stars</span><progress value="1" max="100"></progress> <p>1</p>
                                        <span> 1 Stars</span><progress value="2" max="100"></progress> <p>2</p>
                                    </div>
                                </div>
                                <div class="rs_reviews_section">
                                    <h4>Buyers Reviews:</h4>
                                    <div class="rs_reviews_tab">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#mostrecent" data-toggle="tab">Most recent reviews</a></li>
                                            <li><a href="#mosthelpful" data-toggle="tab"> Most helpful reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="mostrecent">
                                                <div class="rs_commentdiv">
                                                    <div class="rs_comment_img">
                                                        <img src="{{asset('images/user.png')}}" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="rs_comment_data">
                                                        <div class="rs_rating">
                                                            <form>
                                                                <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                                            </form>
                                                        </div>
                                                        <a href="#"><i class="fa fa-flag"></i> report</a>
                                                        <h5>Sara William <kbd>Purchased</kbd></h5>
                                                        <span>19 Nov 2015</span>
                                                    </div>
                                                    <div class="rs_comment_info">
                                                        <p>We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you. We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you.</p>
                                                    </div>
                                                    <div class="rs_comment_info_footer">
                                                        <p>Was this review helpful to you? <a href="#"><i class="fa fa-thumbs-o-up"></i></a> <a href="#"><i class="fa fa-thumbs-o-down"></i></a></p>
                                                        <span>2 of 6 people found this review helpful</span>
                                                    </div>
                                                </div>



                                                <div class="rs_pagination text-right">
                                                    <ul class="pagination">
                                                        <li>
                                                            <a href="#" aria-label="Previous">
                                                                <span aria-hidden="true">
                                                                  <i class="fa fa-angle-left">
                                                                  </i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">1</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="active">2</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">3</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">4</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">5</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">12</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" aria-label="Next">
                                                                <span aria-hidden="true">
                                                                  <i class="fa fa-angle-right">
                                                                  </i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="mosthelpful">
                                                <div class="rs_commentdiv">
                                                    <div class="rs_comment_img">
                                                        <img src="images/blog/bloger_9.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="rs_comment_data">
                                                        <div class="rs_rating">
                                                            <form>
                                                                <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                                            </form>
                                                        </div>
                                                        <a href="#"><i class="fa fa-flag"></i> report</a>
                                                        <h5>Dave Augustin<kbd>Purchased</kbd></h5>
                                                        <span>19 Nov 2015</span>
                                                    </div>
                                                    <div class="rs_comment_info">
                                                        <p>We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you. We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you.</p>
                                                    </div>
                                                    <div class="rs_comment_info_footer">
                                                        <p>Was this review helpful to you? <a href="#"><i class="fa fa-thumbs-o-up"></i></a> <a href="#"><i class="fa fa-thumbs-o-down"></i></a></p>
                                                        <span>2 of 6 people found this review helpful</span>
                                                    </div>
                                                </div>
                                                <div class="rs_commentdiv">
                                                    <div class="rs_comment_img">
                                                        <img src="images/blog/bloger_6.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="rs_comment_data">
                                                        <div class="rs_rating">
                                                            <form>
                                                                <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                                            </form>
                                                        </div>
                                                        <a href="#"><i class="fa fa-flag"></i> report</a>
                                                        <h5>Brie Larson<kbd>Purchased</kbd></h5>
                                                        <span>19 Nov 2015</span>
                                                    </div>
                                                    <div class="rs_comment_info">
                                                        <p>We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you. We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you.</p>
                                                    </div>
                                                    <div class="rs_comment_info_footer">
                                                        <p>Was this review helpful to you? <a href="#"><i class="fa fa-thumbs-o-up"></i></a> <a href="#"><i class="fa fa-thumbs-o-down"></i></a></p>
                                                        <span>2 of 6 people found this review helpful</span>
                                                    </div>
                                                </div>
                                                <div class="rs_commentdiv">
                                                    <div class="rs_comment_img">
                                                        <img src="images/blog/bloger_8.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="rs_comment_data">
                                                        <div class="rs_rating">
                                                            <form>
                                                                <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                                            </form>
                                                        </div>
                                                        <a href="#"><i class="fa fa-flag"></i> report</a>
                                                        <h5>Meghon Tailor<kbd>Purchased</kbd></h5>
                                                        <span>19 Nov 2015</span>
                                                    </div>
                                                    <div class="rs_comment_info">
                                                        <p>We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you. We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you.</p>
                                                    </div>
                                                    <div class="rs_comment_info_footer">
                                                        <p>Was this review helpful to you? <a href="#"><i class="fa fa-thumbs-o-up"></i></a> <a href="#"><i class="fa fa-thumbs-o-down"></i></a></p>
                                                        <span>2 of 6 people found this review helpful</span>
                                                    </div>
                                                </div>
                                                <div class="rs_commentdiv">
                                                    <div class="rs_comment_img">
                                                        <img src="images/blog/bloger_10.jpg" class="img-responsive" alt="">
                                                    </div>
                                                    <div class="rs_comment_data">
                                                        <div class="rs_rating">
                                                            <form>
                                                                <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                                            </form>
                                                        </div>
                                                        <a href="#"><i class="fa fa-flag"></i> report</a>
                                                        <h5>Sara William <kbd>Purchased</kbd></h5>
                                                        <span>19 Nov 2015</span>
                                                    </div>
                                                    <div class="rs_comment_info">
                                                        <p>We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you. We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you.</p>
                                                    </div>
                                                    <div class="rs_comment_info_footer">
                                                        <p>Was this review helpful to you? <a href="#"><i class="fa fa-thumbs-o-up"></i></a> <a href="#"><i class="fa fa-thumbs-o-down"></i></a></p>
                                                        <span>2 of 6 people found this review helpful</span>
                                                    </div>
                                                </div>
                                                <div class="rs_pagination text-right">
                                                    <ul class="pagination">
                                                        <li>
                                                            <a href="#" aria-label="Previous">
                                                                <span aria-hidden="true">
                                                                  <i class="fa fa-angle-left">
                                                                  </i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">1</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="active">2</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">3</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">4</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">5</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">...</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">12</a>
                                                        </li>
                                                        <li>
                                                            <a href="#" aria-label="Next">
                                                                <span aria-hidden="true">
                                                                  <i class="fa fa-angle-right">
                                                                  </i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="faq">
                                <div class="rs_support_faq_section">
                                    <h4>Product Support</h4>
                                    <div class="row">
                                        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                                            <div class="rs_include_products">
                                                <h5>Item support includes:</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-square-o"></i> Availability of the author to answer questions</li>
                                                    <li><i class="fa fa-check-square-o"></i> Answering technical questions about item’s features</li>
                                                    <li><i class="fa fa-check-square-o"></i> Assistance with trted bugs and issues</li>
                                                    <li><i class="fa fa-check-square-o"></i> Help with included 3rd party assets</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                            <div class="rs_notinclude_products">
                                                <h5>item support does not include:</h5>
                                                <ul>
                                                    <li><i class="fa fa-ban"></i> Customization services</li>
                                                    <li><i class="fa fa-ban"></i> Installation services</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rs_singleproduct_faq_questions">
                                        <div id="accordion">
                                            <h3>License of use products</h3>
                                            <div>
                                                <h5>How do I contact support?</h5>
                                                <p>We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you. We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you.</p>
                                                <p>We work with clients big and small across a range of sectors and we utilise all forms of media to get your name.</p>
                                            </div>
                                            <h3>I got an error with PayPal. How can I resolve the issue?</h3>
                                            <div>
                                                <p>We are a fairly small, flexible design studio that designs for print and web. We work flexibly with clients to fulfil their design needs. Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional website or whether you are looking for a design refresh we are confident you will be pleased with the results.</p>
                                            </div>
                                            <h3>I cannot find the license key for activating the theme I have bought some time ago. Where can I find it?</h3>
                                            <div>
                                                <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quislacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</p>
                                            </div>
                                            <h3>Will the themes work with my plugins?</h3>
                                            <div>
                                                <p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia mauris vel est.</p>
                                                <p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            </div>
                                            <h3>Can I buy a “lifetime” license?</h3>
                                            <div>
                                                <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="rs_sidebar_wrapper_fourth">
                    <aside class="widget widget_license">
                        <h4 class="widget-title">License of Use</h4>
                        <p>You can use it for personal or commercial projects. You can't resell it partially or in this form.</p>
                    </aside>

                    <aside class="widget widget_button">
                        <a href="cart.html" class="rs_button rs_button_blue">add to cart</a>
                        <a href="#" class="rs_button rs_button_orange">buy $24</a>
                    </aside>

                    <aside class="widget widget_product">
                        <h4 class="widget-title">Related Products</h4>
                        <div class="rs_product_div">
                            <div class="rs_product_img">
                                <img src="{{asset('images/product/product7.jpg')}}" class="img-responsive" alt="">
                                <div class="rs_overlay">
                                    <div class="rs_overlay_inner">
                                        <ul>
                                            <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/product/product_big7.jpg" title="120 Premium Templates Bundle"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rs_product_price"><h2><small>$</small>55</h2></div>
                            </div>

                            <div class="rs_product_detail">
                                <h5><a href="product_single.html">120 Premium Templates Bundle</a></h5>
                                <div class="rs_rating">
                                    <form>
                                        <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                    </form>
                                </div>
                            </div>
                            <div class="rs_product_div_footer">
                                <div class="rs_author_div">
                                    <img src="{{asset('images/author7.jpg')}}" class="img-responsive" alt="">
                                    <div>
                                        <h4><a href="author_dashboard.html">Julianne Moore</a></h4>
                                        <p><a href="#">HTML Templates</a></p>
                                    </div>
                                </div>
                                <div class="rs_share">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-comment-o"></i> <span>13</span></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i> <span>38</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="rs_product_div">
                            <div class="rs_product_img">
                                <img src="{{asset('product/product10.jpg')}}" class="img-responsive" alt="">
                                <div class="rs_overlay">
                                    <div class="rs_overlay_inner">
                                        <ul>
                                            <li><a class="fancybox animated slideInDown" data-fancybox-group="product" href="images/product/product_big10.jpg" title="Multipurpose WP Theme"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="#" class="animated slideInDown"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rs_product_price"><h2><small>$</small>48</h2></div>
                            </div>

                            <div class="rs_product_detail">
                                <h5><a href="product_single.html">Multipurpose WP Theme</a></h5>
                                <div class="rs_rating">
                                    <form>
                                        <input value="5" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                    </form>
                                </div>
                            </div>
                            <div class="rs_product_div_footer">
                                <div class="rs_author_div">
                                    <img src="images/author10.jpg" class="img-responsive" alt="">
                                    <div>
                                        <h4><a href="author_dashboard.html">Glenne Headly</a></h4>
                                        <p><a href="#">Wordpress</a></p>
                                    </div>
                                </div>
                                <div class="rs_share">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-comment-o"></i> <span>124</span></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o"></i> <span>30</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rs_testimonial_section rs_toppadder50 rs_bottompadder50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="rs_subscribe_section_heading">
                            <h4>Subscribe to our free update deals, announcements, freebies offer and More..!</h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
                        <div class="row">
                            <div class="rs_subscribe_section_form rs_toppadder30">
                                <form class="form">
                                    <input class="form-control" type="text" placeholder="Enter your mail address to start receiving" />
                                    <a href="#" class="rs_button rs_button_orange pull-right rs_center_btn">Subscribe</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

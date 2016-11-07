@extends('master_page')
@section('content')
	<!--Breadcrumb start-->
	<div class="rs_pagetitle rs_toppadder40 rs_bottompadder40">
	<div class="rs_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="page_title">
						<h3 class="rs_bottompadder20">Products Listing 4 Column Grid</h3>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ul class="breadcrumb">
						<li><a href="index.html">home</a></li>
						<li><a href="product_4Column.html">product</a></li>
						<li class="active">mockup1</li>
					</ul>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="rs_found_count">
						<p>14139 Products Found</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Breadcrumb end-->
	<div class="rs_graybg rs_product_found rs_bottompadder30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="rs_filte rs_product4column">  
						<div class="row">
							<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
								<div class="rs_sort"><i class="glyphicon glyphicon-option-vertical" aria-hidden="true"></i> Sort by</div>
								<div class="rs_product_sorting">
									<ul>
										<li><a href="">Price</a></li>
										<li><a href="">Trending</a></li>
										<li><a href="">Release Date</a></li>
										<li><a href="">Best Sellers</a></li>
										<li><a href="">Best Rated</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
								<ul class="rs_sorting">
									<li><a href="#" class="filter" data-filter="all">Released Date </a></li>
									<li><a href="#" class="filter" data-filter=".price">Price</a></li>
									<li><a href="#" class="filter" data-filter=".offers">Offers</a></li>
									<li><a href="#" class="filter" data-filter=".ratings">Ratings</a></li>
									<li><a href="#" class="filter" data-filter=".bestsellers">Best Sellers</a></li>
								</ul>
								<div class="rs_product_view">
									<ul>
										<li><a href="#"><i class="fa fa-th-list"></i></a></li>
										<li><a href="#"><i class="fa fa-th-large"></i></a></li>
									</ul>
								</div>
								<div class="rs_btn_div">
									<a href="#" class="rs_button rs_button_orange">search</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
			<div id="rs_grid">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="woocommerce_wrapper">
						<!-- Data Container -->

						<div class="row " id="data_view" >


						</div>	
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="rs_pagination rs_toppadder40 rs_bottompadder40 text-center">
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

@section('scripts')
	<script src="{{asset('js/scripts/properties.js')}}" type="text/javascript"></script>
@endsection

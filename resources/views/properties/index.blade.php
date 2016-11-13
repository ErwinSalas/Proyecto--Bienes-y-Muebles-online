@extends('master_page')
@section('content')
	<!--Breadcrumb start-->
	<div class="rs_pagetitle rs_toppadder40 rs_bottompadder40">
	<div class="rs_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="page_title">
						<h3 class="rs_bottompadder20">Propiedades Disponibles</h3>
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
	<div class="rs_search_section rs_toppadder40 rs_bottompadder40">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
					<div class="row">


						<div class="rs_search_form">
							<form class="form-inline">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Buscar.....">
								</div>
								<button class="btn rs_search_btn">Search</button>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="rs_graybg rs_product_found rs_bottompadder30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="rs_filte rs_product4column">  
						<div class="row">

							<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
								<ul class="rs_sorting">
									<li><a href="#" class="filter " >Todos </a></li>
									<li><a href="#" class="filter" >Precio</a></li>
									<li><a href="#" class="filter" >Estado</a></li>
									<li><a href="#" class="filter" >Ratings</a></li>
								</ul>
								<div class="rs_product_view">
									<ul>
										<li><a href="#"><i class="fa fa-th-list"></i></a></li>
										<li><a href="#"><i class="fa fa-th-large"></i></a></li>
									</ul>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
			<div id="rs_grid">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<input type="hidden" id="_token" value="{{ csrf_token() }}">
					<div class="woocommerce_wrapper">
						<!-- Data Container -->

						<div class="row" >
							<div id="data_view" >

							</div>

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

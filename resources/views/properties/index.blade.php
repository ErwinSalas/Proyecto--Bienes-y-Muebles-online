@extends('master_page')
@section('content')
	<div class="rs_mainslider">
        <div id="rev_slider_8_1_wrapper" class=" fullwidthbanner-container" data-alias="facebook-feed8"
             style="margin:0px auto;background-color:#dddddd;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
            <div id="rev_slider_8_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                <ul>
                    
                    <!-- SLIDE  -->
                    <li data-index="rs-303" data-transition="scaledownfromleft" data-slotamount="default"
                        data-easein="default" data-easeout="default" data-masterspeed="1500"
                        data-thumb="../../assets/images/photography6-320x160.jpg" data-rotate="0" data-saveperformance="off"
                        data-title="The Dreaming Girl" data-param1="September 6, 2015" data-param2="Lol"
                        data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{asset('images/slider/slide3.jpg')}}" alt="" width="1920" height="1280"
                             data-lazyload="images/slider/slider2.jpg" data-bgposition="initial" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
                             id="slide-68-layer-6"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full"
                             data-height="full"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="s:300;s:300;"
                             data-start="750"
                             data-basealign="slide"
                             data-responsive_offset="on"
                             data-responsive="on"
                             style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0.50);">
                        </div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption maincaption   tp-resizeme rs-parallaxlevel-0"
                             id="slide-92-layer-7"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']" data-voffset="['220','190','160','120']"
                             data-fontsize="['40','40','40','28']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:50px;opacity:0;s:2000;e:Power3.easeOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1700"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 5; white-space: nowrap; color: #fff; border-color:rgba(0, 0, 0, 1.00); text-transform:uppercase; font-size:40px; font-weight:bold; font-family: 'Montserrat', sans-serif;">
                           En Todo El Pais
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption maincaption   tp-resizeme rs-parallaxlevel-0"
                             id="slide-92-layer-8"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['top','top','top','top']" data-voffset="['260','200','190','157']"
                             data-fontsize="['18','18','18','9']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:50px;opacity:0;s:2000;e:Power3.easeOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="2000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 6; white-space: nowrap; color: #fff; border-color:rgba(0, 0, 0, 1.00); text-transform:uppercase; font-size:18px; font-weight:bold; font-family: 'Montserrat', sans-serif;">
                            La mejor manera de adquirir sus propiedades
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;">

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

							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<ul class="rs_sorting">
									<li><a name="proper" href="/properties" class="filter " >Todos </a></li>
								</ul>
							</div >
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding-0">
								<form class="navbar-form navbar-left " role="search">
									<div class="form-group">
										<input type="text" id="input-search" class="form-control" placeholder="Search">
									</div>
									<button  id="btn-search" class="btn btn-default">buscar</button>
								</form>
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
@endsection

@section('scripts')
	<script src="{{asset('js/scripts/properties.js')}}" type="text/javascript"></script>
@endsection

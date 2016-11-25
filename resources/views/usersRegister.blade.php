@extends('master_page')
@section('content')
    <!--Breadcrumb start-->
    <div class="rs_pagetitle rs_toppadder40 rs_bottompadder40">
        <div class="rs_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page_title">
                        <h3 class="rs_bottompadder20">contact</h3>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="index.html">home</a></li>
                        <li class="active">contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb end-->

    <div class="rs_graybg rs_toppadder100 rs_bottompadder100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="rs_main_heading rs_pink_heading rs_bottompadder60">
                        <h3>Registro de imuebles</h3>
                        <div><span><i class="fa fa-plus"></i></span></div>
                    </div>
                </div>
            </div>
            <div class="row align-center">
                <div class="col-md-12 ">
                    <form  role="form" class="rs_contact_form" method="post" action="/save" enctype="multipart/form-data">

                        <div class="rs_submitform">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                            	<label>Name</label>
                                <input name="name" required="required" type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            
                            <div class="form-group">
                            	<label>Email</label>
                                <input name="email" required="required" type="text" class="form-control" id="email" placeholder="example@example.example">
                            </div>
                            
                            <div class="form-group">
                            	<label>Password</label>
                                <input name="password" required="required" type="password" class="form-control" id="password" placeholder="*************">
                            </div>
                            
                            <div class="form-group">
                            	<label>Type</label>
                                <select name="type" id="type">
								  <option value="admin">Administrator</option>
								  <option value="users">Customer</option>
								</select>
                            </div>

                            <div class="rs_btn_div rs_toppadder30">
                                <input type="submit" id="send_btn" class="rs_button rs_button_orange">send</input>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
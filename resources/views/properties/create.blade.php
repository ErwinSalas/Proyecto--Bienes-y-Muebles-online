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
                    <form  role="form" class="rs_contact_form" method="post" action="/properties" enctype="multipart/form-data">
                        <div class="rs_submitform">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" id="ur_name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input name="image" type="file" class="form-control" id="ur_mail" placeholder="Enter your mail address">
                            </div>
                            <div class="form-group">
                                <input name="location" type="text" class="form-control" id="ur_mail" placeholder="Enter your mail address">
                            </div>
                            <div class="form-group">
                                <input name="state" type="text" class="form-control" id="ur_mail" placeholder="Enter your mail address">
                            </div>

                            <div class="form-group">
                                <input name="price" type="number" class="form-control" id="sub" placeholder="Enter your subject">
                            </div>

                            <textarea name="description" class="form-control" rows="10" id="msg" placeholder="Enter your message"></textarea>

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


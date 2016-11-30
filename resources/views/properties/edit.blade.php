<!--Breadcrumb end-->
@extends('master_page')
@section('content')
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
                <form  role="form" class="rs_contact_form"  enctype="multipart/form-data">
                    <input type="hidden" value="{{ csrf_token() }}" id="token">
                    <div class="rs_submitform">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <input name="name" type="text" required class="form-control" value="{{$property->name}}" id="name" placeholder="Enter the name of the property">
                        </div>
                        <div class="form-group">
                            <input name="image" type="file" value="{{$property->image}}" required class="form-control" id="image" placeholder="Enter the umage">
                        </div>
                        <div class="form-group">
                            <input name="location" type="text" value="{{$property->location}}" required class="form-control" id="location" placeholder="Enter the location">
                        </div>
                        <div class="form-group">
                            <input name="state" type="text" value="{{$property->state}}" required class="form-control" id="state" placeholder="Enter the state">
                        </div>

                        <div class="form-group">
                            <input name="price" type="number"  value="{{$property->price}}" required class="form-control" id="price" placeholder="Enter the price">
                        </div>

                        <textarea name="description" required class="form-control" rows="10"  value="{{$property->description}}" id="description" placeholder="Enter your description message"></textarea>

                        <div class="rs_btn_div rs_toppadder30">
                            <input type="submit" onclick="actualizar({{$property->id}})" class="rs_button rs_button_orange" value="actualizar">

                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script src="{{asset('js/scripts/properties.js')}}" type="text/javascript"></script>
@endsection

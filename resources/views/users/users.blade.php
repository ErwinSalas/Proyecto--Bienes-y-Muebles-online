@foreach($users as $user)
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

            <div class="col-lg-3 col-sm-6">

                <div class="card hovercard">
                    <div class="cardheader">

                    </div>
                    <div class="avatar">
                        @if($user->password==null)
                            <img alt="" src="{{$user->image}}">
                        @else
                            <img alt="" src="app_images/{{$user->image}}">
                        @endif

                    </div>
                    <div class="info">
                        <div class="title">
                            <a target="_blank">{{$user->name}}</a>
                        </div>
                        <div class="desc">{{$user->email}}</div>
                        <div class="desc">{{$user->type}}</div>
                        @if($user->state)
                            <div class="desc">Estado: Activo</div>
                        @else
                            <div class="desc">Estado: Inactivo</div>
                        @endif

                    </div>
                    <div class="bottom">
                        <a class="btn btn-primary btn-twitter btn-sm">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" rel="publisher"
                        >
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a class="btn btn-primary btn-sm" rel="publisher"
                           >
                            <i class="fa fa-facebook"></i>
                        </a>
                        <div class="rs_product_div_footer">
                            <div class="rs_share">
                                <ul>
                                    <li><a onclick="Eliminar({{$user->id}})"> DELETE <i class="fa fa-eraser"></i> <span>here</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



@endforeach
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="rs_pagination rs_toppadder40 rs_bottompadder40 text-center">
            {{$users->links()}}
        </div>
    </div>
</div>

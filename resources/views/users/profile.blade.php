@extends('master_page')
@section('content')
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <div class="container">
        <div class="fb-profile">
            <img align="left" class="fb-image-lg" src="http://lorempixel.com/850/280/nightlife/5/" alt="Profile image example"/>
            @if($user->password==null)
                <img align="left" class="fb-image-profile thumbnail" src="{{$user->image}}" alt="Profile image example"/>
            @else
                <img align="left" class="fb-image-profile thumbnail" src="app_images/{{$user->image}}" alt="Profile image example"/>
            @endif
            <div class="fb-profile-text">
                <h1>{{$user->name}}</h1>
                <p>{{$user->email}}</p>
                <p>{{$user->type}}</p>
                <p>{{$user->state}}</p>
            </div>
        </div>
    </div> <!-- /container -->


@endsection
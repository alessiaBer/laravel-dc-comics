@extends('layouts.app')

@section('content')
@include('partials.jumbotron')
<div class="primary-stripe bg-primary">
</div>

<div class="container comic_container position-relative">
    <div class="img_container position-absolute">
        <div class="cover_img position-relative">
            <span class="text-uppercase position-absolute text-white bg-primary">{{$comic->type}}</span>
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" height="270">
        </div>
    </div>

    
    
    <div class="row">
        <div class="col-8">
            <h2 class="text-uppercase">{{$comic->title}}</h2>
            <div class="price-banner">
                <div class="banner_left">
                    <span class="price">U.S. Price: 
                    <span class="text-white">{{$comic->price}}</span>
                </span>
                <span class="text-uppercase">Available</span>
                </div>
                <span class="text-white">
                    Check Availability 
                    <i class="fa-solid fa-caret-down"></i>
                </span>
            </div>
            <div class="description">
                {{$comic->description}}
            </div>
        </div>
        <div class="col-4">
            <h4>ADVERTISEMENT</h4>
        </div>
    </div>
</div>

@endsection
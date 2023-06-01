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
            <h2 class="text-uppercase pt-5">{{$comic->title}}</h2>
            <div class="price-banner d-flex justify-content-between">
                <div class="banner_left d-flex justify-content-between">
                    <span class="price d-inline-block pe-1">
                        <strong>U.S. Price: </strong> 
                        <span class="text-white">{{$comic->price}}</span>
                    </span>
                    <span class="text-uppercase avail d-inline-block">
                        <strong>Available</strong> 
                    </span>
                </div>
                <span class="text-white d-block check_avail">
                    Check Availability 
                    <i class="fa-solid fa-caret-down"></i>
                </span>
            </div>
            <div class="description">
                {{$comic->description}}
            </div>
        </div>
        <div class="col-4">
            <div class="adv-container position-relative">
               <h4 class="pt-4 text-end">ADVERTISEMENT</h4> 
               <img src="https://cdn.vox-cdn.com/thumbor/deScZLd-0Y1LOe6ppjmpeA9YVtY=/1400x788/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/22802887/IMG_DE272BF718E8_1.jpeg" alt="adv">
               <span class="d-block position-absolute banner-title">UNLEASH <br>HEORIC<br> REWARDS</span>
               <button type="button" class="btn btn-warning rounded-0 position-absolute">APPLY NOW</button>
               <span class="visa d-block text-uppercase position-absolute">dc power visa</span>
            </div>
        </div>
    </div>
</div>
@include('partials.banner')
@endsection
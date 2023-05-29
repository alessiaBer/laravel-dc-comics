@extends('layouts.app')

@section('content')
<section class="bg-dark text-white">
<div class="container py-5">
    <h3 class="pb-4">{{$comic->title}}</h3>
    <div class="content_container d-flex">
        <div class="comic_img_container">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" height="300">
        </div>
        <div class="comic_info ps-4">
            <p><strong>Description:</strong><br>{{$comic->description}}</p>
            <span class="d-block"><strong>Price: </strong>{{$comic->price}}</span>
            <span class="d-block"><strong>Sale Date: </strong>{{$comic->sale_date}}</span>
            <span class="d-block"><strong>Type: </strong>{{$comic->type}}</span>
        </div>
    </div>
</div>
</section>


@endsection
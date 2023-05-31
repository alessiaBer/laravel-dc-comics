@extends('layouts.app')

@section('content')
@include('partials.jumbotron')

<section class="current_series bg-dark pb-4">
    <div class="container my_container_lg">
        <span class="section_title bg-primary text-white">
            <h4 class="d-inline">CURRENT SERIES</h4>
        </span>
        <div class="section_content pt-5">
            <div class="row row-col-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-6 mt-6">
                @foreach($comics as $comic)
                <div class="col">
                    <div class="card rounded-0 border-0 bg-transparent pb-4">
                        <a href="{{route('comic', $comic->id)}}">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        <div class="card_text">
                            <span class="text-uppercase text-white">{{$comic['title']}}</span>
                        </div>
                    </a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="my_btn text-center">
                <button class="btn btn-primary text-uppercase rounded-0 my-0 mx-auto">Load More</button>
            </div>
        </div>

    </div>
</section>
<div class="banner bg-primary">
    <div class="container my_container_lg text-white py-5">
        <div class="row row-cols-1 row-cols-md-5">
            <div class="col d-flex align-items-center">
                <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="" height="50px">
                <span class="d-inline-block text-uppercase">digital comics</span>
            </div>
            <!-- /.col -->
            <div class="col d-flex align-items-center">
                <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="" height="50px">
                <span class="d-inline-block text-uppercase">dc merchandise</span>
            </div>
            <!-- /.col -->
            <div class="col d-flex align-items-center">
                <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="" height="50px">
                <span class="d-inline-block text-uppercase">subscription</span>
            </div>
            <!-- /.col -->
            <div class="col d-flex align-items-center">
                <img src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="" height="50px">
                <span class="d-inline-block text-uppercase">comic shop locator</span>
            </div>
            <!-- /.col -->
            <div class="col d-flex align-items-center">
                <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="" width="60px">
                <span class="d-inline-block text-uppercase">dc power visa</span>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row row-cols-1 row-cols-md-5 -->
    </div>
    <!-- /.container my_container_lg -->
</div>
@endsection
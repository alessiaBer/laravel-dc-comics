@extends('layouts.app')

@section('content')
<section class="bg-dark text-white">
    <div class="container create_container py-5">
        <form class="row g-5" action="{{route('comics.update', $comic->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="col-12">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" type="text" id="description" name="description" rows="5">{{$comic->description}}</textarea>
            </div>
            <div class="col-md-2">
                <img src="{{$comic->thumb}}" alt="" height="200px">
            </div>
            <div class="col-md-10">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Image URL" value="{{$comic->thumb}}">
            </div>
            <div class="col-md-5">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
            </div>
            <div class="col-md-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="YYYY-MM-DD" value="{{$comic->sale_date}}">
            </div>
            <div class="col-md-4">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="ex. Comic Book" value="{{$comic->type}}">
            </div>
            <div class="col-md-4 mx-auto text-center pt-3">
                <button type="submit" class="btn btn-light text-dark px-4">Update</button>
            </div>
        </form>
    </div>
</section>
@endsection
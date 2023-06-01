@extends('layouts.app')

@section('content')
<section class="bg-dark text-white">
    <div class="container create_container py-5">
        @include('partials.validation_error')
        <form class="row g-5" action="{{route('comics.update', $comic->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="col-12">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$comic->title}}">
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" type="text" id="description" name="description" rows="5">{{$comic->description}}</textarea>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-2">
                <img src="{{$comic->thumb}}" alt="" height="200px">
            </div>
            <div class="col-md-10">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Image URL" value="{{$comic->thumb}}">
                @error('thumb')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-5">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{$comic->price}}">
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="YYYY-MM-DD" value="{{$comic->sale_date}}">
                @error('sale_date')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="ex. Comic Book" value="{{$comic->type}}">
                @error('type')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-4 mx-auto text-center pt-3">
                <button type="submit" class="btn btn-light text-dark px-4">Update</button>
            </div>
        </form>
    </div>
</section>
@endsection
@extends('layouts.app')

@section('content')
<section class="bg-dark text-white">
    <div class="container create_container py-5">
        <form class="row g-3" action="{{route('comics.store')}}" method="post">
            @csrf

            <div class="col-12">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="col-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" type="text" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="col-12">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Image URL">
            </div>
            <div class="col-md-6">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="col-md-2">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="YYYY-MM-DD">
            </div>
            <div class="col-md-4">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" placeholder="ex. Comic Book">
            </div>
            <div class="col-md-4 mx-auto text-center pt-3">
                <button type="submit" class="btn btn-light text-dark px-4">Sign in</button>
            </div>
        </form>
    </div>
</section>


@endsection
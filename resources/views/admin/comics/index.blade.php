@extends('layouts.app')

@section('content')
<section class="bg-dark text-white">
<div class="container py-5">
    <h2 class="pb-4">Admin Area</h2>
    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Thumb</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Sale Date</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{$comic->id}}</th>
                <td><img src="{{$comic->thumb}}" alt="{{$comic->title}}" height="100px"></td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td>
                    <a href="{{route('comics.show', $comic->id)}}" class="text-decoration-none index-actions">
                        <span class="bg-primary text-white p-1 rounded-1">Show</span>
                    </a>
                    <a href="#" class="text-decoration-none index-actions">
                        <span class="bg-warning text-dark p-1 rounded-1">Edit</span>
                    </a>
                    <a href="#" class="text-decoration-none index-actions">
                        <span class="bg-danger text-white p-1 rounded-1">Delete</span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</section>
@endsection
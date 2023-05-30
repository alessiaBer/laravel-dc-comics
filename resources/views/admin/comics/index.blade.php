@extends('layouts.app')

@section('content')
<section class="bg-dark text-white">
    <div class="container py-5">
        <div class="section_head d-flex align-items-center justify-content-between pb-5">
            <h2 class="">Admin Area</h2>
            <a href="{{route('comics.create')}}" class="text-decoration-none">
                <span class="py-2 px-3 bg-white text-dark rounded-4">Add new comic</span>
            </a>
        </div>
        <table class="table text-white pt-4">
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
                        <a href="{{route('comics.edit', $comic->id)}}" class="text-decoration-none index-actions">
                            <span class="bg-warning text-dark p-1 rounded-1">Edit</span>
                        </a>
                        <!-- method without confirmation
                        <form action="{{route('comics.destroy', $comic->id)}}" method="post" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete_button index-actions bg-danger text-white border-0 rounded-1">Delete</button>
                        </form> -->
                        <!-- method with modal for confirmation -->
                        <!-- anchor tag that triggers modal-->
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="text-decoration-none index-actions">
                            <span class="bg-danger text-white p-1 rounded-1">Delete</span>
                        </a>
                        <!-- delete confirmation modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <span class="text-dark">
                                            Are you sure you want to delete
                                            <strong>{{$comic->title}}</strong>?
                                        </span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="{{route('comics.destroy', $comic->id)}}" method="post"
                                            class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
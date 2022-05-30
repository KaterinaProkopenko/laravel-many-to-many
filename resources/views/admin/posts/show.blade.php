@extends('layouts.app')

@section('content')
    <div class="my-card-secondary py-4 d-inline-block">
        <div class="row g-0">
            <div class="col-12 text-center">
                <img src="{{$post->image}}" class="img-fluid rounded" alt="Current image">
            </div>
            <div class="col-8 mx-auto">
                <div class="card-body">
                    <h2 class="card-title text-center">{{$post->title}}</h5>
                    {{-- <a href="{{route("admin.posts.show", $post)}}" type="button" class="btn btn-outline-primary"></a> --}}
                    <p class="card-text fs-4">{{$post->description}}</p>
                    <p class="card-text fs-5">{{$post->text}}</p>
                    <p class="card-text fs-5"><small class="text-muted">Author: {{$post->author}}</small></p>
                    <p class="card-text fs-5"><small class="text-muted">Vote: {{$post->vote}}</small></p>
                    <h5>Categories:</h5>
                    @foreach($post->categories as $category)
                        <p style="background-color: {{$category->color}}">{{$category->category}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')

    <form class="text-center" action="{{route('admin.posts.store')}}" method="post">
        @csrf

        <div class="mx-auto w-25">
            <h1 class="my-4">Create new post</h1>
        </div>

        <div class="mx-auto w-25">
            <label class="py-2" for="image">Image</label>
            <br>
            <input class="w-100" type="text" name="image" id="image">
        </div>
        
        <div class="mx-auto w-25">
            <label class="py-2" for="title">Title</label>
            <br>
            <input class="w-100" type="text" name="title" id="title">
        </div>
        
        <div class="mx-auto w-25">
            <label class="py-2" for="description">Description</label>
            <br>
            <textarea class="w-100" name="description" id="description"></textarea>
        </div>

        <div class="mx-auto w-25">
            <label class="py-2" for="text">Text</label>
            <br>
            <textarea class="w-100" name="text" id="text"></textarea>
        </div>
        
        <div class="mx-auto w-25 mb-3">
            <label class="py-2" for="author">Author</label>
            <br>
            <input class="w-100" type="text" name="author" id="author">
        </div>

        <div class="mx-auto mb-3">
            @foreach ($categories as $category)
                <label for="categories" class="badge rounded-pill" style="background-color: {{ $category->color }}">
                    {{$category->category}}
                </label> 
                <input class="form-check-input me-3" type="checkbox" name="category[]" value="{{$category->id}}">
            @endforeach
        </div>

        <input type="submit" value="Create">

    </form>
@endsection
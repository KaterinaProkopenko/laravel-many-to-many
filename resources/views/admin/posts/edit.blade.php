@extends('layouts.app')

@section('content')
    <form class="text-center" action="{{route('admin.posts.update', $post)}}" method="post">
        @csrf
        @method('PUT')

        <div class="mx-auto w-25">
            <h1 class="my-4">Update your post</h1>
        </div>

        <div class="mx-auto w-25">
            <label class="py-2" for="image">Image</label>
            <br>
            <input class="w-100" type="text" name="image" id="image" value="{{$post->image}}">
        </div>
        
        <div class="mx-auto w-25">
            <label class="py-2" for="title">Title</label>
            <br>
            <input class="w-100" type="text" name="title" id="title" value="{{$post->title}}">
        </div>
        
        <div class="mx-auto w-25">
            <label class="py-2" for="description">Description</label>
            <br>
            <input type="text" class="w-100" name="description" id="description" value="{{$post->description}}">
        </div>

        <div class="mx-auto w-25">
            <label class="py-2" for="text">Text</label>
            <br>
            <input type="text" class="w-100" name="text" id="text" value="{{$post->text}}">
        </div>
        
        <div class="mx-auto w-25 mb-3">
            <label class="py-2" for="author">Author</label>
            <br>
            <input class="w-100" type="text" name="author" id="author" value="{{$post->author}}">
        </div>

        <div class="mx-auto mb-3">
            @foreach ($categories as $category)
                <label for="categories" class="badge rounded-pill" style="background-color: {{ $category->color }}">
                    {{$category->category}}
                </label> 
                <input class="form-check-input me-3" type="checkbox" name="category[]" value="{{$category->id}}" {{ $post->categories->contains($category) ? 'checked' : '' }}>    
            @endforeach
        </div>

        <input type="submit" value="Update">

    </form>
@endsection
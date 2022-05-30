@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h1 class="text-center">Benvenuto/a {{ Auth::user()->name }}!</h1>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{route('admin.posts.index')}}">Posts</a>
                </li>
                <li class="list-group-item">
                    <a href="#">A second item</a>
                </li>
                <li class="list-group-item">
                    <a href="#">A third item</a>
                </li>
                <li class="list-group-item">
                    <a href="#">A fourth item</a>
                </li>
                <li class="list-group-item">
                    <a href="#">And a fifth one</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@endsection
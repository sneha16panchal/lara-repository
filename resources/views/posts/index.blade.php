@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Posts</div>

                <div class="card-body">
                    @foreach($posts as $post)
                        {{ $post->title }}
                        {{ $post->content }} <a href="{{ route('postss.edit', $post->id }}">Edit</a><a href="{{ route('postss.destroy', $post->id }}">Delete</a><br>
                    @endforeach
                                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

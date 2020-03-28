@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'put']) !!}
                        @csrf('token')
                        {!!Form::label('title', 'Title') !!}
                        {!!Form::text('title', $post->title) !!} <br>
                        {!!Form::label('content', 'Content') !!}
                        {!!Form::textarea('content', $post->content) !!}
                        {!! Form::submit('Update') !!}
                    {!! Form::close() !!}                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

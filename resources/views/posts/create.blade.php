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
                    {!! Form::open(['route' => 'posts.store', 'method' => 'post']) !!}
                        @csrf('token')
                        {!!Form::label('title', 'Title') !!}
                        {!!Form::text('title') !!} <br>
                        {!!Form::label('content', 'Content') !!}
                        {!!Form::textarea('content') !!}
                        {!! Form::submit('Save') !!}
                    {!! Form::close() !!}                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $post->title }} - <small>by {{ $post->user->name }}</small>

                        <span class="pull-right">
                            {{ $post->created_at->toDayDateTimeString() }}
                        </span>
                    </div>

                    <div class="panel-body">
                        <p>{{ $post->body }}</p>
                        <p>
                            Category: <span class="label label-success">{{ $post->category->name }}</span> <br>

                        </p>
                    </div>
                </div>

                @include('frontend._form')

                @include('frontend._comments')

            </div>

        </dev>
    </dev>
@endsection

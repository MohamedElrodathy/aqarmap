@extends('layouts.app')

@section('content')
    <div class="container">

        @include('frontend._search')

        <div class="row">

            <div class="col-md-12">
                @forelse ($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{ $post->title }} - <small>by {{ $post->user->name }}</small>

                            <span class="pull-right">
                                {{ $post->created_at->toDayDateTimeString() }}
                            </span>
                        </div>

                        <div class="panel-body">
                            <p>{{ str_limit($post->body, 200) }}</p>

                            <p>
                               Category: <span class="btn btn-sm btn-success">{{ $post->category->name }}</span>
                               Comments:  <span class="btn btn-sm btn-info"> <span class="badge">{{ $post->comments_count }}</span></span>

                                <a class="padding_right badge" href="{{ url("/posts/{$post->id}") }}" class="btn btn-sm btn-primary">See more details</a>
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="panel panel-default">


                        <div class="panel-body">
                            <p>Not Result Found</p>
                        </div>
                    </div>
                @endforelse

                <div align="center">
                    {!! $posts->appends(['search' => request()->get('search')])->links() !!}
                </div>

            </div>

        </dev>
    </dev>
@endsection

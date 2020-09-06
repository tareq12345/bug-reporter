@extends('layouts.app')

@section('content')
    <h1>bugs</h1>
    @if(count($bugs) > 0)
        @foreach($bugs as $bug)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$bugs->Name}}</a></h3>
                        <!-- <small>Written on {{$post->created_at}} by {{$post->user->name}}</small> -->
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
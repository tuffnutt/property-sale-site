@extends('layouts/app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <small>Written on : {{$post->created_at}}</small>
    <div>
            <a href="\posts"><button class="btn btn-default">Back</button></a>
    </div>
@endsection
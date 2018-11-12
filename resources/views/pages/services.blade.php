@extends('layouts/app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Services</h1>
        <p>Laravel services</p>
        @if(count($services) > 0)
            <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
            </ul>
        @endif
    </div>
@endsection
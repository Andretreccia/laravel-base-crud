
@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row py-5">
        @foreach($comics as $comic)
        <div class="col-2">
            <a href="{{route('comic', ['comic' => $comic->id])}}">
                <div class="card text-center">
                    <img src="{{$comic->thumb}}" alt="" class="m-auto">
                    <h4 class="text-uppercase">{{$comic->series}}</h4>
                </div>
            </a>
        </div>
        @endforeach
    </div>

@endsection


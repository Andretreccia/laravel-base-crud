
@extends('layouts.app')
@section('Comics')
    

@section('content')
<div class="container text-center">
    <div class="row py-5">
        <h2 class="text-light">ADMIN SECTION</h2>
        @foreach($comics as $comic)
        <div class="col-xl-2 col-md-4">
            <a href="{{route('comic', ['comic' => $comic->id])}}">
                <div class="card text-center">
                    <img src="{{$comic->thumb}}" alt="" class="m-auto">
                    <h4 class="text-uppercase">{{$comic->series}}</h4>
                </div>
            </a>
        </div>
        @endforeach
       
       <button class="load-more text-center mb-5"><a class="text-light nav-link" href="{{route('admin.comics.create')}}"> ADD A COMIC</a></button>
    </div>

@endsection


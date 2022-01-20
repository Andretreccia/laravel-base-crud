@extends('layouts.app')
@section('title', 'Comic') 

@section('content')
<div id="comic">
    <div class="banner">
        <div class="container">
            <div class="comic_thumb">
                <span>
                    COMIC BOOK
                </span>
                <img src="{{$comic->thumb}}" alt="">
                <span>VIEW GALLERY</span>
            </div>
        </div>
    </div>
    <section>
        {{-- admin --}}


        <h1 style="font-size:100px" class="">ADMIN SECTION </h1>
        <a class="btn-primary" href="{{route('admin.comic.edit', $comic->id)}}">EDIT</a>
        <button class="btn-danger">DELETE</button>

        
        {{-- admin --}}
        <div class="container d-flex py-5">
            <div class="col-6">
                <h2 class="fs-3 fw-bold">{{$comic->title}}</h2>
                <div class="banner">
                    <div class="price">
                        <div>U.S. Price: <span>{{$comic->price}}</span></div>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="availability">
                        Check Availability
                    </div>
                </div>
                <p>{{$comic->description}}</p>
            </div>
            <div class="col-4 text-end">
                <div>Advertisment</div>
                <img src="{{asset('img/adv.jpg')}}" alt="">
            </div>
        </div>
    </section>
    <div class="details bg-light">
        <div class="container">
            <div class="col-6">
                <h4>Talent</h4>
                <div class="d-flex">
                    <div class="sx">Art by: </div>
                   
                </div>
                <div class="d-flex">
                    <div class="sx">Written by: </div>
                    
                </div>

            </div>
            <div class="col-6">
                <h4>Specs</h4>
                <div class="d-flex">
                    <div class="sx">
                        Series:
                    </div>
                    <div class="dx">
                        {{$comic->series}}
                    </div>
                </div>
                <div class="d-flex">
                    <div class="sx">
                        U.S. Price:
                    </div>
                    <div class="dx">
                        {{$comic->price}}
                    </div>
                </div>
                <div class="d-flex">
                    <div class="sx">
                        On Sale Date:
                    </div>
                    <div>
                        {{$comic->sale_date}}
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>




@endsection
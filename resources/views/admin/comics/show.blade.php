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


        <div class="container">
            <h1 style="font-size:100px" class="">ADMIN SECTION </h1>
        <a class="" href="{{route('admin.comic.edit', $comic->id)}}"><button type="button" class="btn btn-primary">EDIT</button></a>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  DELETE
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure to delete this comic?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{route('admin.comic.destroy', $comic->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">DELETE</button>
        </form>
      </div>
    </div>
  </div>
</div>
        </div>
        
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
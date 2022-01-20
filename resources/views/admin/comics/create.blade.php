@extends('layouts.app')

    
@section('content')
<div class="container">
    <h2 class="text-light">ADMIN SECTION</h2>
    <form class="py-5" method="post" action="{{route('admin.comics.store')}}">
    @csrf
        <label class="text-light" for="title">Insert a title</label>
        <input class="form-control mb-3" type="text" name="title" id="title">
        <label class="text-light" for="description">Insert a description</label>
        <textarea class="form-control mb-3" type="text-area" name="description" id="description" rows="3"></textarea>
        <label class="text-light" for="thumb">Insert a image url link</label>
        <input class="form-control mb-5" type="text" name="thumb" id="thumb">
        <button class="form-control w-25 m-auto" type="submit">CREATE IT!</button>
    </form>
</div>

@endsection


@extends('layouts.app')


@section('content')
<div class="container text-center">
    <div class="row py-5">
        
    </div>
    <button class="load-more text-center mb-5"> LOAD MORE</button>
</div>
<div class="shop_comics">
    <div class="container">
        <div class="row py-4">
            <div class="col">
                <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <span>DIGITAL COMICS</span>
            </div>
            <div class="col">
                <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                <span>DC MERCHANDISE</span>
            </div>
            <div class="col">
                <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                <span>SUBSCRIPTION</span>
            </div>
            <div class="col">
                <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                <span>COMIC SHOP LOCATOR</span>
            </div>
            <div class="col">
                <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                <span>DC POWER VISA</span>
            </div>
        </div>
    </div>
</div>


@endsection
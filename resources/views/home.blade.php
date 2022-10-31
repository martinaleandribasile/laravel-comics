@extends('layouts.layouts')
@section('Main')
    <div class="bg-main">
        <div class="boxcontainer text-white">

            @foreach ($comic as $element)
                <div class="cardcomic">
                    <img class="imgbox" src="{{ $element['thumb'] }}" alt="">
                    <h6 class="pe-4">{{ $element['title'] }}</h6>
                </div>
            @endforeach
        </div>
        <button class="btn btn-primary">LOAD MORE</button>
    </div>
    <div class="main-blu">
        <div class="boxcontainer shop">
            <div class="shopcard">
                <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                <a href="">
                    <p>DIGITAL COMICS</p>
                </a>
            </div>
            <div class="shopcard">
                <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                <a href="">
                    <p>DC MERCHANDISE</p>
                </a>
            </div>
            <div class="shopcard">
                <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                <a href="">
                    <p>SUBSCRIPTION</p>
                </a>
            </div>
            <div class="shopcard">
                <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                <a href="">
                    <p>COMIC SHOP LOCATION</p>
                </a>
            </div>
            <div class="shopcard">
                <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                <a href="">
                    <p>DC POWER VISA</p>
                </a>
            </div>
        </div>
    </div>
@endsection

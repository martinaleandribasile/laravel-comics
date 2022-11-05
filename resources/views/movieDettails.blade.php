@extends('layouts.layouts')
@section('Main')
    <div class="bg-blue">
        <img src="{{ $comic['thumb'] }}" alt="" class="poster">
    </div>

    <div class="boxcontainer">
        <div class="dettailsbox">
            <div class="dettails">
                <h3 class="text-uppercase my-3 title">{{ $comic['title'] }}</h3>
                <div class="boxprice">
                    <button class="btn btn-success py-2 d-flex w-100 justify-content-between align-items-center">
                        <div class="price">
                            <p class="m-0">U.S Price {{ $comic['price'] }}</p>
                            <p class="m-0">AVAIBLE</p>
                        </div>
                        <select name="" id="selectav">
                            <option value="check">Check Availability</option>
                            <option value="usa">for USA</option>
                            <option value="europa">for Europe</option>
                        </select>
                    </button>

                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="adv">
                <p class=" my-1 text-black-50 text-end">ADVERTISEMENT</p>
                <img src="{{ asset('images/adv.jpg') }}" alt="">
            </div>
        </div>

    </div>


    <div class="bg-beige">
        <div class="boxcontainer">
            <div class="boxdetails2 py-4">
                <div class="talent">
                    <h5>Talent</h5>
                    <hr>
                    <div class="box-talent">
                        <div class="art">Art by:</div>
                        <div class="artists">
                            @foreach ($comic['artists'] as $artist)
                                <a class="text-info" href="">{{ $artist }}</a>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="box-talent">
                        <div class="art">Written by:</div>
                        <div class="artists">
                            @foreach ($comic['writers'] as $artist)
                                <a class="text-info" href="">{{ $artist }}</a>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="specs">
                    <h5>Specs</h5>
                    <hr>
                    <div class="box-specs">
                        <div class="spc">Series:</div>
                        <div class="specs"><a class="text-info text-uppercase" href="">{{ $comic['series'] }}</a>
                        </div>
                    </div>
                    <hr>
                    <div class="box-specs">
                        <div class="spc">U.S Price:</div>
                        <div class="specs"> {{ $comic['price'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="box-specs">
                        <div class="spc">On Sale Date:</div>
                        <div class="specs"> {{ $comic['sale_date'] }}
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="text-center py-4">
            <a class="m-5" href="/"><button class="btn btn-outline-dark">Home</button></a>
        </div>
    </div>
@endsection

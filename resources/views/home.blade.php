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
    </div>
@endsection

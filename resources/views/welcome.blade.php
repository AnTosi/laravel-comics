@extends('layouts.app')

@section ('page-title', 'comics')

@section('content')
<div class="jumbotron">
    <img src="{{ '../img/jumbotron.jpg' }}" alt="">
</div>

<div class="bg-black">
    <div class="container position-relative">
        <span class="blue_title px-3 py-2">CURRENT SERIES</span>
        <div class="comics_container d-flex flex-wrap py-5">
            @foreach ($comics as $id => $comic)
            <div class="col-2">
                <div class="p-2">
                    <a href="comics/{{$id}}"><img src="{{$comic['thumb']}}" alt="{{$comic['title']}}"></a>
                    <h6 class="text-white py-2">{{ strtoupper($comic['series']) }}</h6>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center py-3">
            <button class="blue_button">LOAD MORE</button>
        </div>
    </div>
</div>

<div class="bg_main-blue py-5">
    <div class="blueband_container container d-flex justify-content-around text_white">
        <div class="col-20 d-flex align-items-center">
            <img src="{{'img/buy-comics-digital-comics.png'}}" alt="">
            <div class="d-flex px-2">DIGITAL COMICS</div>
        </div>
    
        <div class="col-20 d-flex align-items-center">
            <img src="{{'img/buy-comics-merchandise.png'}}" alt="">
            <div class="d-flex px-2">DC MERCHANDISE</div>
        </div>
    
        <div class="col-20 d-flex align-items-center">
            <img src="{{'img/buy-comics-subscriptions.png'}}" alt="">
            <div class="d-flex px-2">SUBSCRIPTION</div>
        </div>
    
        <div class="col-20 d-flex align-items-center">
            <img src="{{'img/buy-comics-shop-locator.png'}}" alt="">
            <div class="d-flex px-2">COMIC SHOP LOCATOR</div>
        </div>
    
        <div class="col-20 d-flex align-items-center">
            <img src="{{'img/buy-dc-power-visa.svg'}}" alt="">
            <div class="d-flex px-2">DC POWER VISA</div>
        </div>
    </div>

</div>


@endsection
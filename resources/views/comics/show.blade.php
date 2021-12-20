@extends('layouts.app')

@section ('page-title', 'comic page')

@section('content')

<div class="bg_jumbotron">
    
</div>

<div class="blue_band">
    <div class="container_half position-relative">
        <div class="poster">
            <div class="img_container">
                <div class="label top_left">COMIC BOOK</div>
                <div class="label bottom">VIEW GALLERY</div>
                <img src="{{$comic['thumb']}}" alt="">
            </div>
        </div>
    </div>
</div>

<div class="white_info container_half d-flex my-5">
    <div class="info col-8">
        <h3 class="py-4">
            {{strtoupper($comic['title'])}}
        </h3>

        <!-- this is the green box  -->
        <div class="commercial_info d-flex align-items-center semi-bold">
            <div class="left d-flex justify-content-between align-items-center col-9 p-3">
                <div>
                    <span class="text-white-50">U.S. Price:</span>
                    <span class="text-white">{{$comic['price']}}</span>
                </div>
                <div class="text-white-50">AVAILABLE</div>
            </div>
            <div class="right col-3 text-white py-3">
                Check Availability &#9662;
            </div>
        </div>

        <!-- //greenbox over -->

        <p class="py-3">
            {{$comic['description']}}
        </p>
    </div>

    <div class="ad col-4 p-3">
        <div class="ad_container d-flex justify-content-end flex-wrap">
            <h5 class="ad text-end text-muted semi-bold col-12">
                ADVERTISEMENT
            </h5>
            <img src="../img/adv.jpg" alt="">
        </div>
    </div>
</div>

<div class="grey_info">
    <div class="container_half d-flex">
        <div class="left col-6">
            <h4 class="py-4">Talent</h4>
            <div class="d-flex credit py-2">
                <div class="title col-4">
                    Art by:
                </div>
                <div class="col-8 people">
                    <!-- Did with the foreach loop to give them all a link, but it would have left a comma after the last word, so for now the closest to the screen is with implode. -->
                    {{implode(", ", $comic['artists'])}}
                </div>
            </div>
            <div class="d-flex credit py-2">
                <div class="title col-4">
                    Written by:
                </div>
                <div class="col-8 people">
                    <!-- Did with the foreach loop to give them all a link, but it would have left a comma after the last word, so for now the closest to the screen is with implode. -->
                    {{implode(", ", $comic['writers'])}}
                </div>
            </div>
        </div>

        <div class="right col-6">
            <h4 class="py-4">Specs</h4>
            <div class="d-flex credit py-2">
                <div class="title col-4">
                    Series:
                </div>
                <div class="col-8 text_main-blue">
                    {{strtoupper($comic['series'])}}
                </div>
            </div>
            <div class="d-flex credit py-2">
                <div class="title col-4">
                    U.S. Price:
                </div>
                <div class="col-8">
                    {{$comic['price']}}
                </div>
            </div>
            <div class="d-flex credit py-2">
                <div class="title col-4">
                    On Sale Date::
                </div>
                <div class="col-8">
                    {{$comic['sale_date']}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg_light-grey shop_links">
    <div class="d-flex container_half">
        <div class="col-3 d-flex justify-content-between p-4 text-muted cta_container"><span>DIGITAL COMICS</span><img class ="cta" src="{{ '../img/cta1.png' }}"></div>
        <div class="col-3 d-flex justify-content-between p-4 text-muted cta_container"><span>SHOP DC</span><img class ="cta" src="{{ '../img/cta2.png' }}" alt=""></div>
        <div class="col-3 d-flex justify-content-between p-4 text-muted cta_container"><span>COMIC SHOP LOCATOR</span><img class ="cta" src="{{ '../img/cta3.png' }}" alt=""></div>
        <div class="col-3 d-flex justify-content-between p-4 text-muted cta_container last"><span>SUBSCRIPTIONS</span><img class ="cta" src="{{ '../img/cta4.png' }}" alt=""></div>
    </div>
</div>



@endsection
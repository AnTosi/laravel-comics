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

@endsection
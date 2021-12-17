@extends('layouts.app')

@section ('page-title', 'welcome')

@section('content')
<div class="jumbotron">
    <img src="{{ 'img/jumbotron.jpg' }}" alt="">
</div>

<div class="bg-black">
    <div class="container position-relative">
        <span class="blue_title px-3 py-2">CURRENT SERIES</span>
        <div class="comics_container my-3">

        </div>
    </div>
</div>
@endsection
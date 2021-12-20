@extends('layouts.app')

@section ('page-title', 'comic page')

@section('content')

<div class='comic'>
    <div class="poster">
        {{ddd($comic)}}
    </div>
</div>
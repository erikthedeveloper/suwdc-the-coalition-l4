@extends('layouts.main')

@section('page.title')
SUWDC Members
@endsection

@section('content')
<h1>Our Members</h1>
<?php
$fake_members = [
    "Erik Aybar"   => "http://lorempixel.com/200/200/business/7/",
    "Kasey Cowley" => "http://lorempixel.com/200/200/business/1/",
    "John Ronald"  => "http://lorempixel.com/200/200/business/3/",
    "Ron Johnson"  => "http://lorempixel.com/200/200/business/9/"
];
?>
@foreach($fake_members as $name => $image)
<a href="/members/erik-aybar">
<h4>{{$name}}</h4>
</a>
<div class="row">
    <div class="col-sm-3">
        <img class="img-circle" src="{{$image}}" alt=""/>
    </div>
    <div class="col-sm-9">
        <p class="lead">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi deserunt magni nemo odio?
        </p>
        <p class="lead">
        Amet animi deserunt magni nemo odio? Amet animi deserunt magni nemo odio? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet animi deserunt magni nemo odio?
        </p>
    </div>
</div>
<hr>
@endforeach
@endsection
@extends('layouts.main')

@section('page.title')
SUWDC Members
@endsection

@section('content')
<h1>Our Members</h1>
<hr>
<?php
$faker = Faker\Factory::create();
$fake_members = [
    "Erik Aybar"   => "http://lorempixel.com/200/200/business/7/",
    "Kasey Cowley" => "http://lorempixel.com/200/200/business/1/",
    "John Ronald"  => "http://lorempixel.com/200/200/business/3/",
    "Ron Johnson"  => "http://lorempixel.com/200/200/business/9/"
];
?>
@foreach($members as $member)
<div class="row">
    <div class="col-sm-3 text-center">
        <a href="{{route('members.show', Str::slug($member->first_name . " " . $member->last_name))}}">
        <img class="img-circle" src="http://lorempixel.com/200/200/business/{{mt_rand(1,9)}}" alt=""/>
        <h4>{{$member->first_name . " " . $member->last_name}}</h4>
        </a>
    </div>
    <div class="col-sm-9">
        <div class="lead">
            <p>
                {{$faker->paragraph(mt_rand(2, 5))}}
            </p>
            <p>
                {{$faker->paragraph(mt_rand(2, 5))}}
            </p>
        </div>
    </div>
</div>
<hr>
@endforeach
@endsection
@extends('layouts.main')

<?php
$fake_attributes = [
    "bio"              => "A great biography here....",
    "profile_image" => "https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xap1/v/t1.0-9/10404876_10202532753824731_540350757285231520_n.jpg?oh=657d56d0a1b89976181b7c308b308896&oe=54A01A20&__gda__=1418912281_cf95bc040e313abce4663d0d1510e604",
    "website_url"      => "http://erikaybar.name",
    "github_username"  => "erikthedeveloper",
    "twitter_username" => "erikthedev_",
    "city"             => "Hurricane, UT",
    "company"          => "PracticeGenius, LLC",
    "is_for_hire"      => false
];
?>

@section('page.title')
{{$member->first_name}} {{$member->last_name}} - Software Engineer
@endsection

@section('content')
<h1>{{$member->first_name}} {{$member->last_name}}</h1>

<div class="row">
    <div class="col-sm-8">
        <blockquote>
            It is what is and it ain't what it ain't
            <small>{{$member->first_name}} {{$member->last_name}}</small>
        </blockquote>
        <p>
            Erik Aybar is a ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, molestias.
        </p>
        <p>
            In his spare time, consectetur adipisicing elit. Dignissimos ex mollitia nulla omnis qui, quo repudiandae suscipit vel. Ad delectus incidunt libero nulla perferendis quam?
        </p>
    </div>
    <div class="col-sm-4">
        <img src="{{$fake_attributes['profile_image']}}" alt=""
            class="img-circle"
            style="max-width: 250px;">
    </div>
</div>

<hr>

<div class="row">
    <div class="col-sm-4">
        <ul class="list-group">
            <li class="list-group-item">
                <h3>Skills</h3>
            </li>
            @foreach($member->skills as $skill)
            <li class="list-group-item">{{$skill->name}}</li>
            @endforeach
        </ul>
    </div>

    <div class="col-sm-4">
        <ul class="list-group">
            <li class="list-group-item">
                <h3>Links</h3>
            </li>
            <li class="list-group-item">Website: {{$fake_attributes['website_url']}}</li>
            <li class="list-group-item">GitHub: {{$fake_attributes['github_username']}}</li>
            <li class="list-group-item">Twitter: {{$fake_attributes['twitter_username']}}</li>
        </ul>
    </div>

    <div class="col-sm-4">
        <ul class="list-group">
            <li class="list-group-item">
                <h3>Status</h3>
            </li>
            <li class="list-group-item">Location: {{$fake_attributes['city']}}</li>
            <li class="list-group-item">Available for Hire: {{$fake_attributes['is_for_hire']? "Yes" : "No"}}</li>
            <li class="list-group-item">Company: {{$fake_attributes['company']}}</li>
            <li class="list-group-item">Position: Software Engineer</li>
        </ul>
    </div>
</div>
@endsection
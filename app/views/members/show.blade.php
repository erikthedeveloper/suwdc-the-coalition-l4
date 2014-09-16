@extends('layouts.main')

<?php
$fake_attributes = [
    "bio"              => "A great biography here....",
    "profile_image"    => "http://lorempixel.com/400/400/business/" . mt_rand(1,9),
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
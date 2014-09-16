@extends('layouts.main')

@section('page.title')
Edit Profile
@endsection

@section('content')
<h1>{{$member->last_name}}, {{$member->first_name}} <small>Edit Yourself!</small></h1>

{{Form::model($member, [
    'class' => 'form',
    'route' => ['members.update', $member->makeSlug()],
    'method' => 'PUT'
])}}
<div class="row">
    <div class="col-sm-6 col-sm-push-3">
        {{Form::text("first_name", null, ["class" => "form-control input-lg", "placeholder" => "First Name"])}}
        {{Form::text("last_name",  null, ["class" => "form-control input-lg", "placeholder" => "Last Name"])}}
        {{Form::email("email",     null, ["class" => "form-control input-lg", "placeholder" => "Your Email"])}}
        <hr>
        <button class="btn btn-lg btn-block btn-success">Update Me!</button>
    </div>
</div>
{{Form::close()}}

@endsection
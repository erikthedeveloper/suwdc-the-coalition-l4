@extends('layouts.main')

@section('page.title')
Sign Up
@endsection

@section('content')
<h1>Join the <strong>SUWDC</strong> <small>Register Here!</small></h1>

{{Form::model($member, [
    'class' => 'form',
    'route' => 'members.store',
    'method' => 'POST'
])}}
<div class="row">
    <div class="col-sm-6 col-sm-push-3">

        {{Form::text("first_name", null, ["class" => "form-control input-lg", "placeholder" => "First Name"])}}
        {{Form::text("last_name",  null, ["class" => "form-control input-lg", "placeholder" => "Last Name"])}}
        {{Form::email("email",     null, ["class" => "form-control input-lg", "placeholder" => "Your Email"])}}
        <hr>
        {{Form::password("password",               ["class" => "form-control input-lg", "placeholder" => "Password"])}}
        {{Form::password("password_confirmation",  ["class" => "form-control input-lg", "placeholder" => "Password Confirm"])}}
        <button class="btn btn-lg btn-block btn-success">Sign Me Up!</button>
    </div>
</div>
{{Form::close()}}

@endsection
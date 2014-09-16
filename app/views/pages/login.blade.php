@extends('layouts.main')

@section('page.title')
Log In
@endsection

@section('content')
<h1>Log In</h1>

{{Form::open([
    'class' => 'form',
    'route' => 'login',
    'method' => 'POST'
])}}
<div class="row">
    <div class="col-sm-6 col-sm-push-3">

        {{Form::email("email",     null, ["class" => "form-control input-lg", "placeholder" => "Your Email"])}}
        {{Form::password("password",               ["class" => "form-control input-lg", "placeholder" => "Password"])}}
        <hr/>
        <button class="btn btn-lg btn-block btn-success">Log In</button>
    </div>
</div>
{{Form::close()}}

@endsection
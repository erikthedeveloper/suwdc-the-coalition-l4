<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('page.title', 'Default Page Title')</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="http://bootswatch.com/paper/bootstrap.min.css">
</head>
<body>

    @include('layouts.main_header_nav')

    @if(Session::has('flash_message') || count($errors))
    <div class="alert alert-warning" style="margin: 0;
                                            border-radius: 0;
                                            bottom: 50px;
                                            position: absolute;
                                            opacity: 0.8;">
        <strong>{{Session::get('flash_message', 'Well, ok then!')}}</strong>
        <ul class="list-unstyled">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <div class="container">
        @yield('content')
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
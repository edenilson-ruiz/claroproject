<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>ClaroProject - Project Management App</title>
    <meta name="description" content="ClaroProject is a project management app built for learning purposes">

    <!-- Typekit Fonts -->
    <script src="//use.typekit.net/udt8boc.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
<div class="container">
    @include('layouts.partials.alerts')
    @yield('content')
</div>
</body>
</html>
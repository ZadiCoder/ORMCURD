<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>@yield('title')</title>
</head>
<body>
    @yield('page-name')
    @yield('banner')
    @yield('main')
    @section('default-page')
    <h4>This is Default text from layout</h4>    
    @show
</body>
</html>
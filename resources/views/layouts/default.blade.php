<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Sample App') - Laravel 学习教程</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
        @include('shared._messages')    
        @yield('content')
        @include('layouts._footer')
        </div>
    </div>

    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
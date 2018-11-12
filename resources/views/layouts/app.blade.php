<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/custom.css')}}"> -->
    <title>{{config('app.name','LARAVEL_TEST_APP')}}</title>
</head>
<body>
    @include('inc/navbar')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
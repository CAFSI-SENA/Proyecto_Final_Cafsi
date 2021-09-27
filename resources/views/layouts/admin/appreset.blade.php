<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title> Cafsi | @yield('title' )</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="stylesheet" href="{{url('css/app.css')}}">

</head>

<body>

@yield('content')

<!-- JAVASCRIPT -->
<script src="{{url('js/app.js')}}"></script>
</body>
</html>

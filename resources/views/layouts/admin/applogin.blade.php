<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title> Cafsi | @yield('title' )</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{url('css/applogin.css')}}">

</head>

<body>
<!-- Start right Content here -->
<!-- ============================================================== -->

            @yield('content')

</div>
<!-- JAVASCRIPT -->
<script src="{{url('js/applogin.js')}}"></script>
</body>
</html>



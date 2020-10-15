
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Real state</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <script>
        var BASE_URL = "{{asset('/')}}";
        var TOKEN = "{{csrf_token()}}";
    </script>
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/')}}css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('/')}}css/nice-select.css">
    <link rel="stylesheet" href="{{asset('/')}}css/flaticon.css">
    <link rel="stylesheet" href="{{asset('/')}}css/gijgo.css">
    <link rel="stylesheet" href="{{asset('/')}}css/animate.css">
    <link rel="stylesheet" href="{{asset('/')}}css/slick.css">
    <link rel="stylesheet" href="{{asset('/')}}css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}css/stripe.css">
    <link rel="stylesheet" href="{{asset('/')}}css/andjica.css">
    @yield('css')
    <link rel="stylesheet" href="{{asset('/')}}fonts/linearicons/style.css">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="{{asset('/')}}fonts/material-design-iconic-font/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="{{asset('/')}}css/select2.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet"/>
    <!-- DATE-PICKER -->
    <link rel="stylesheet" href="{{asset('/')}}booker/vendor/date-picker/css/datepicker.min.css">
    <!-- Calendar external -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <script src="https://kit.fontawesome.com/f976c3767c.js" crossorigin="anonymous"></script>
</head>

<body>

    @include('components.nav')

     @yield('content')

 @include('components.footer')

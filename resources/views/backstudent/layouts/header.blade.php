<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title','E-okul')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('back/img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/font-awesome.min.css')}}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/owl.transitions.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/normalize.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/main.css')}}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/educate-custon-icon.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/modals.css')}}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/morrisjs/morris.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/metisMenu/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/metisMenu/metisMenu-vertical.css')}}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/calendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/calendar/fullcalendar.print.min.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('back/css/data-table/bootstrap-editable.css')}}">
    <link href="{{asset('back/src/css/lightbox.css')}}" rel="stylesheet" />
    <!-- select2 CSS
     ============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/select2/select2.min.css')}}">
    <!-- chosen CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('back/css/chosen/bootstrap-chosen.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('back/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('back/sweetalert2/dist/sweetalert2.min.css')}}">
    @yield('css')
    @toastr_css
</head>

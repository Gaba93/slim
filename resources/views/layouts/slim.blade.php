<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- AUI -->
    <link rel="stylesheet" href="//aui-cdn.atlassian.com/aui-adg/6.0.6/css/aui.min.css" media="all">
    <link rel="stylesheet" href="//aui-cdn.atlassian.com/aui-adg/6.0.6/css/aui-experimental.min.css" media="all">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="//aui-cdn.atlassian.com/aui-adg/6.0.6/js/aui.min.js"></script>
    <script src="//aui-cdn.atlassian.com/aui-adg/6.0.6/js/aui-experimental.min.js"></script>
    <script src="//aui-cdn.atlassian.com/aui-adg/6.0.6/js/aui-datepicker.min.js"></script>
    <script src="//aui-cdn.atlassian.com/aui-adg/6.0.6/js/aui-soy.min.js"></script>

</head>
<body>
<div id="app">


    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token()}}'}</script>
    <title>Codencat</title>
    <link href="{{'css/app.css'}}" rel="stylesheet" type="text/css">
    <link href="{{'../resources/assets/fontawesome/css/all.min.css'}}" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="verticle-lines">
        <div class="verticle-line"></div>
        <div class="verticle-line"></div>
        <div class="verticle-line"></div>
        <div class="verticle-line"></div>
        <div class="verticle-line"></div>
        <div class="verticle-line"></div>
    </div>

    @yield('content')

    <script src="{{'js/app.js'}}"></script>
</body>
</html>

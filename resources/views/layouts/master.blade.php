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

    <div class="cursor">
        <div class="cursor__ball cursor__ball--big ">
            <svg height="30" width="30">
            <circle cx="15" cy="15" r="12" stroke-width="0"></circle>
            </svg>
        </div>

        <div class="cursor__ball cursor__ball--small">
            <svg height="10" width="10">
            <circle cx="5" cy="5" r="4" stroke-width="0"></circle>
            </svg>
        </div>
    </div>

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
    <script src="{{'js/jquery.scrollify.js'}}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script>
    <script>

        var $bigBall = document.querySelector('.cursor__ball--big');
        var $smallBall = document.querySelector('.cursor__ball--small');
        var $hoverables = document.querySelectorAll('.hoverable');

        // Listeners
        document.body.addEventListener('mousemove', onMouseMove);
        for (var i = 0; i < $hoverables.length; i++) {
            $hoverables[i].addEventListener('mouseenter', onMouseHover);
            $hoverables[i].addEventListener('mouseleave', onMouseHoverOut);
        }

        // moving cursor
        function onMouseMove(e) {
        TweenMax.to($bigBall, .4, {
            x: e.clientX - 15,
            y: e.clientY - 15 });

        TweenMax.to($smallBall, .1, {
            x: e.clientX - 5,
            y: e.clientY - 7 });

        }

        // Hover an element
        function onMouseHover() {
            TweenMax.to($bigBall, .3, {
            scale: 4 });
        }
        function onMouseHoverOut() {
            TweenMax.to($bigBall, .3, {
            scale: 1 });
        }
    </script>
</body>
</html>

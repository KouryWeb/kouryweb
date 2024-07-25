<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/style.css">
        <link rel="stylesheet" href="/css-animation.css">
        <title>KouryWeb</title>
    </head>
    <body>
        @include('partials.nav')
        @include('partials.hero')
        @include('partials.why-us')
        @include('partials.services')
        <div id="our-work" class="our-work">
            @include('partials.our-work')
            @include('partials.about')
            @include('partials.contact')
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/dimbox.min.js"></script>
        <script src="//cdn.lordicon.com/lordicon.js"></script>
        <script type="text/javascript" src="/scrolly.js"></script>
        @include('partials.scripts')
    </body>
</html>

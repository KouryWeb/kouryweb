<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/style.css?v=3">
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
        @error('contact_email')
        <div class="alert alert-danger rounded-0 fixed-bottom mb-0">
            A contact email is required.
        </div>
        @enderror
        @session('success')
        <div class="alert alert-success rounded-0 fixed-bottom mb-0">
            {{ session('success') }}
        </div>
        @endsession
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="/dimbox.min.js"></script>
        <script src="//cdn.lordicon.com/lordicon.js"></script>
        <script type="text/javascript" src="/scrolly.js"></script>
        @stack('scripts')
        <script>
            window.onload = function () {
                scrolly();
            };

            document.addEventListener("DOMContentLoaded", function () {
                const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
                const navbarCollapse = document.getElementById('navbarNav');

                navLinks.forEach(function (link) {
                    link.addEventListener('click', function () {
                        new bootstrap.Collapse(navbarCollapse, {
                            toggle: false
                        }).hide();
                    });
                });
            });

            document.addEventListener("DOMContentLoaded", function () {
                document.querySelectorAll('a.smooth-scroll').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault();
                        const targetId = anchor.getAttribute('href').substring(1);
                        const targetElement = document.getElementById(targetId);

                        if (targetElement) {
                            targetElement.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    });
                });
            });
        </script>
    </body>
</html>

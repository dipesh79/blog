<!DOCTYPE html>
<html lang="en">
<head>
    <x-turnstile.scripts/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-seo/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
    @vite('resources/css/app.css')
    <style>
        /* Smooth scrolling for anchors */
        html {
            scroll-behavior: smooth;
        }

        /* Custom scroll-padding-top to account for fixed navbar height */
        section {
            scroll-margin-top: 6rem;
        }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K1SEF6PY3M"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-K1SEF6PY3M');
    </script>
    {{--Google Search Console--}}
    <meta name="google-site-verification" content="XjHLWJOXkGoiX70YdLCYsxreAq0tUi3dI9PGa0Z4lA4"/>
</head>
<body class="font-sans text-gray-800 bg-gray-50">
<x-navbar/>
<x-hero/>
<x-why/>
<x-feature/>
<x-screenshots/>
<x-pricing/>
<x-testimonial/>
<x-stats/>
<x-about/>
<x-contact/>
<x-footer/>
</body>
</html>

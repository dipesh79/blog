<!DOCTYPE html>
<html lang="en">
<head>
    <x-turnstile.scripts/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog CMS - Effortless Blog Management with SEO & Control</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('site.webmanifest')}}">

    <meta name="description"
          content="Blog CMS is a fully-featured content management system built on Laravel for fast, SEO-ready, and high-performance blog creation and management.">
    <meta name="keywords"
          content="Blog CMS, Laravel CMS, Blog platform, SEO ready, Content Management, full control, web development">
    <meta name="author" content="Dipesh Khanal">
    <link rel="canonical" href="{{url()->current()}}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{config('app.url')}}">
    <meta property="og:title" content="Blog CMS - Effortless Blog Management with SEO & Control">
    <meta property="og:description"
          content="A fully-featured CMS with bulletproof SEO, dynamic content, and all the tools you need to run a modern, high-performance blog.">
    <meta property="og:image" content="{{asset('og.jpg')}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{config('app.url')}}">
    <meta name="twitter:title" content="Blog CMS - Effortless Blog Management with SEO & Control">
    <meta name="twitter:description"
          content="Built for speed, control, and future-proofing. Get started with the best modern blog CMS today.">
    <meta name="twitter:image" content="{{asset('og.jpg')}}">
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

    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Product",
            "name": "Blog CMS",
            "image": "{{asset('og.jpg')}}",
            "description": "A fully-featured content management system built on Laravel for fast, SEO-ready, and high-performance blog creation and management.",
            "brand": {
                "@@type": "Brand",
                "name": "Blog CMS"
            },
            "offers": {
            "@@type": "Offer",
            "url": "{{config('app.url')}}#pricing",
            "availability": "https://schema.org/InStock",
            "priceCurrency": "USD",
            "price": "100",
            "priceValidUntil": "{{ \Carbon\Carbon::now()->addYear()->format('Y-m-d') }}",
            "priceSpecification": {
                "@@type": "UnitPriceSpecification",
                "priceType": "http://schema.org/RegularPrice",
                "billingPeriod": "P1Y",
                "price": "100",
                "priceCurrency": "USD"
            },
            "shippingDetails": {
            "@@type": "ShippingDeliveryOptions",
            "shippingRate": {
                "@@type": "MonetaryAmount",
                "value": "0",
                "currency": "USD"
            },
            "deliveryMethod": "https://schema.org/DigitalTransfer",
            "shippingDestination": {
                "@@type": "DefinedRegion",
                "addressCountry": "All"
            }
       },
       "aggregateRating": {
            "@@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "1",
            "bestRating": "5.0"
       }
    }
    </script>

    <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "WebSite",
          "name": "Blog CMS",
          "url": "{{config('app.url')}}"
        }
    </script>

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

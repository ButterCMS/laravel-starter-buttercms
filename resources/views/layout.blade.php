<!DOCTYPE html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('metaTitle')</title>
    <meta name="description" content="@yield('metaDescription')" />
    @hasSection('metaImage')
        <meta name="image" content="@yield('metaImage')" />
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/favicon.ico"/>

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/lineicons.css"/>
    <link rel="stylesheet" href="/assets/css/main.css"/>
    <link
            rel="preload"
            href="/assets/css/tiny-slider.css"
            as="style"
            onload="this.onload=null;this.rel='stylesheet'"
    >
    <noscript><link rel="stylesheet" href="assets/css/tiny-slider.css"></noscript>
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
</p>
<![endif]-->

<div class="preloader">
    <div class="loader">
        <div class="spinner">
            <div class="spinner-container">
                <div class="spinner-rotator">
                    <div class="spinner-left">
                        <div class="spinner-circle"></div>
                    </div>
                    <div class="spinner-right">
                        <div class="spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- preloader end -->

@php
$includeMenu = $includeMenu ?? true;
$includeFooter = $includeFooter ?? true;
@endphp

<x-header :includeMenu="$includeMenu" />

@yield('content')

@if($includeFooter)
    <x-footer />
@endif

<a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
</a>

<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/polyfill.js"></script>
<script src="/assets/js/main.js"></script>

</body>
</html>

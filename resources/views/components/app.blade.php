<!DOCTYPE HTML>
<!--
 Reflex by Pixelarity
 pixelarity.com | hello@pixelarity.com
 License: pixelarity.com/license
-->
<html>

<head>
    <title>Martin Sheeks | Zenfrii</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ mix('main.css') }}" />
</head>

<body class="is-preload">
    {{-- <x-navigation></x-navigation> --}}
    <!-- Wrapper -->
    <div id="wrapper">
        {{ $slot }}
    </div>
    <!-- Scripts -->
    <script src="{{ mix('js/jquery.min.js') }}"></script>
    <script src="{{ mix('js/browser.min.js') }}"></script>
    <script src="{{ mix('js/breakpoints.min.js') }}"></script>
    <script src="{{ mix('js/util.js') }}"></script>
    <script src="{{ mix('js/main.js') }}"></script>

</body>

</html>

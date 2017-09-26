<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ asset('ng/favicon.ico') }}">
        <title>Laravel</title>
        <base href="/">
    </head>
    <body>
        <app-root>Loading...</app-root>
        <script type="text/javascript" src="{{ asset('ng/inline.bundle.js') }}"></script>
        <script type="text/javascript" src="{{ asset('ng/polyfills.bundle.js') }}"></script>
        <script type="text/javascript" src="{{ asset('ng/styles.bundle.js') }}"></script>
        <script type="text/javascript" src="{{ asset('ng/vendor.bundle.js') }}"></script>
        <script type="text/javascript" src="{{ asset('ng/main.bundle.js') }}"></script>
    </body>
    </body>
</html>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <title>Laravel Vue JS Like Dislike Demo</title>
 
    <script src="{{  mix('js/app.js') }}" defer></script>
    <link href="{{  mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
 
        <main class="py-4">
            @yield('content')
        </main>
 
    </div>
</body>
</html>
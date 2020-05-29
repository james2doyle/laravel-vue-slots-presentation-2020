<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">
        <style type="text/css">
            {{-- More on v-cloak: https://medium.com/vuejs-tips/v-cloak-45a05da28dc4 --}}
            [v-cloak] > * { display:none }
        </style>
    </head>
    <body>
        <div id="app">
            <div class="p-10 mb-4">
                @yield('content')
            </div>
        </div>
        <script src="{{ mix('/js/manifest.js') }}"></script>
        <script src="{{ mix('/js/vendor.js') }}"></script>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>

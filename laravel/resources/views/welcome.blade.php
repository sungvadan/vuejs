<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <div id="root">
           <Notification></Notification>
        </div>

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>

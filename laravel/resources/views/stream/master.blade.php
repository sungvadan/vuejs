<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Stream</title>
</head>
<body>
    <div id="root">
        @include('stream.header')
        <div class="container">
            @yield('content')
        </div>
    </div>

<script src="{{ mix('/js/stream-app.js') }}"></script>
</body>
</html>


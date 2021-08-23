<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shared state</title>
</head>
<body>
    <div id="one">
        @{{ shared.user.name }}
    </div>
    <div id="two">
        @{{ shared.user.name }}
    </div>

    <script src="{{ mix('/js/shared-state.js') }}"></script>
</body>
</html>

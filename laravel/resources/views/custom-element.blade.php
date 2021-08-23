<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>custom-element</title>
</head>
<body>
    <div id="root">
        <Coupon v-model="code"></Coupon>
    </div>
    <script src="{{ mix('/js/custom-element.js') }}"></script>
</body>
</html>

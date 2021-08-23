<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>scope-slot</title>
</head>
<body>
    <div id="root">
        <list-item :items="['one', 'two', 'tree']" v-slot="slotProps">
            <em>@{{ slotProps.item }}</em>
        </list-item>
    </div>
    <script src="{{ mix('/js/bootstrap.js') }}"></script>
    <script>
        Vue.component('list-item', {
            props: ['items'],
            template: `
                <ul>
                    <li v-for="item in items">
                      <slot v-bind:item="item">
                        @{{ item  }}
                      </slot>
                    </li>
                </ul>
            `
        })

        new Vue({
            el: '#root'
        })
    </script>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tooltip</title>
</head>
<body>
    <div id="root">
       <example-component></example-component>
    </div>
    <script src="{{mix('/js/bootstrap.js')}}"></script>
    <script>


        Vue.component('example-component', {
            data() {
              return {
                  name : 'John Doe'
              }
            },
            render(element) {
                return element('div', { attrs: {id: 'foobar'}}, [
                    element('h1', this.name)
                ])
            }


        })


        new Vue({
            'el': '#root',
        })


    </script>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tooltip</title>
    <style>
        .tooltip {
            background-color: black;
            color: white;
            border-radius: 5px;
            padding: 5px 5px 5px 5px;
        }
    </style>
</head>
<body>
    <div id="root">
        <h3>Option #1</h3>
        <p>
            Hello there, <span data-tooltip="I am a tool tip" data-tooltip-placement="right">hover me here</span>
        </p>

        <hr>

        <h3>Option #2 Vue directive</h3>
        <p>
            Hello there, <span v-tooltip:top="`Here another tooltip`">hover me here</span>
        </p>

        <h3>Option #3</h3>
        <p>
            Hello there, <span data-tooltip-name="our-products-tooltip">hover me here</span>
        </p>

        <tooltipme name="our-products-tooltip">
            <h1>Our products</h1>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
        </tooltipme>
    </div>
    <script src="{{mix('/js/bootstrap.js')}}"></script>
    <script>
        Vue.directive('tooltip', {
            bind(elem, bindings) {
                new Tooltip(elem, {
                    placement:  bindings.arg,
                    title: bindings.value
                })

                console.log(bindings)
            }
        })

        Vue.component('tooltipme', {
            props: {
                name: {}
            },
            template: `
                <div>
                  <div ref="body" v-show="false">
                    <slot></slot>
                  </div>
                </div>
            `,
            mounted() {
                const elem = document.querySelector(`[data-tooltip-name=${this.name}]`)
                new Tooltip(elem, {
                    placement: 'top',
                    title: this.$refs.body.innerHTML,
                    html: true
                })
            }


        })


        new Vue({
            'el': '#root',
            mounted() {
                document.querySelectorAll('[data-tooltip]').forEach(elem => {
                    new Tooltip(elem, {
                        placement: elem.dataset.tooltipPlacement || 'top',
                        title: elem.dataset.tooltip
                    })
                })
            }
        })


    </script>
</body>
</html>

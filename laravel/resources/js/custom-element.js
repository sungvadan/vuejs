import Vue from 'vue'

Vue.component('Coupon', {
    props: ['code'],
    template: `
        <div>
            <input type="text" :value="code" @input="updateCoupon($event.target.value)" ref="input">
        </div>
    `,
    methods: {
        updateCoupon(code) {
            console.log(code)
            // some validation
            if (code === 'free') {
                this.$refs.input.value = code = ''
                alert('no longer valid')
            }

            this.$emit('input', code)
        }
    }
})


new Vue({
    el: '#root',
    data: {
        code: 'Free'
    }
})

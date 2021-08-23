import Vue from "vue";
import axios from "axios";
import Form from "./core/Form";
import Notification from "./components/Notification.vue";

window.Form = Form
window.axios = axios

new Vue({
    el: '#root',
    data: {
        form: new Form({
            title: '',
            description: '',
        }),

    },
    components: {
        Notification
    },
    methods: {
        onSubmit() {
            this.form.submit('post', '/projects')
                .then(response => console.log(response))
                .catch(error => console.log(error))
        }
    }
})


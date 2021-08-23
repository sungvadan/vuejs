<template>
    <div class="container">
        <div class="columns" v-for="status in statuses">
            <div class="column">
                <article class="message">
                    <div class="message-header">
                        <p>{{ status.user.name}}</p>
                        <p>{{ status | ago | capitalize }}</p>
                    </div>
                    <div class="message-body">
                        {{ status.body }}
                    </div>
                </article>
            </div>
        </div>
        <AddToSteam @completed="addStatus"></AddToSteam>
    </div>
</template>

<script>
    import moment from 'moment'
    import AddToSteam from "../components/AddToSteam";
    export default {
        name: 'Home',
        components:  {
            AddToSteam
        },
        data() {
            return {
                statuses: []
            }
        },
        filters: {
            ago(date) {
                return moment(date).fromNow()
            },
            capitalize(value) {
                return value.toUpperCase()
            }
        },
        created() {
            axios.get('statuses')
                .then(({data}) => this.statuses = data)
        },
        methods: {
            addStatus(status) {
                this.statuses.push(status)
            }
            // postOn(status) {
            //     return moment(status.updated_at).fromNow()
            // }
        }
    }
</script>

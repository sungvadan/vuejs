<template>
    <div class="message">
        <div class="message-header">
            <p>Add To Stream</p>
        </div>
        <div class="message-body">
            <form @submit.prevent="onsubmit" @keydown="form.errors.remove($event.target.name)">
                <div class="field">
                    <div class="control">
                        <textarea name="body" class="textarea" placeholder="I have  something to say ..." v-model="form.body"></textarea>
                        <span
                            class="help is-danger"
                            v-text="form.errors.get('body')"
                            v-if="form.errors.has('body')"
                        ></span>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import Form from '../core/Form'
    export default {
        data() {
            return {
                form:  new Form({body: ''})
            }
        },
        methods: {
            onsubmit() {
                this.form
                    .submit('post', '/statuses')
                    .then(status => this.$emit('completed', status))
            }
        }

    }
</script>

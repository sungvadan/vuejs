<template>
    <div class="notification">
        <h1>{{message}}</h1>
    </div>
</template>

<script>
export default {
    data() {
        return {
            message : 'Hello world'
        }
    }
}
</script>

<style scoped>
    .notification {
        background-color: #e3e3e3;
    }
</style>

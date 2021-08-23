<template>
    <div>
        <slot></slot>
    </div>
</template>

<script>
import Flickity from 'flickity'
import 'flickity/dist/flickity.min.css'

export default {
    name: "Carousel",
    props: [
        {height: {default: '500px'}}
    ],
    mounted() {
        new Flickity(this.$el, {
            cellAlign: 'left',
            contain: true
        })
    }
}
</script>

<style scoped>
    .carousel-cell {
        height: 500px; /* height of carousel */
    }
</style>

import VueRouter from "vue-router"
import Home from "./views/Home"
import About from "./views/About"

let routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/about',
        component: About
    }
]

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
})

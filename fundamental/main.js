Vue.component('task-list', {
    template: `
        <div>
            <task v-for="task in tasks" v-text="task.description"></task>
        </div>
    `,
    data() {
        return {
            tasks: [
                {description: 'wake up', completed: true},
                {description: 'make breakfast', completed: false},
                {description: 'clean the house', completed: false},
                {description: 'do the homework', completed: false},
                {description: 'make lunch', completed: true},
                {description: 'wake up', completed: true},
            ]
        }
    }
})

Vue.component('task', {
    template: '<li><slot></slot></li>'
})

new Vue({
    el: "#root"
})
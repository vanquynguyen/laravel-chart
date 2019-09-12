import VueRouter from 'vue-router'

export default new VueRouter({
    routes: [
        {
            path: '/',
            redirect: '/chart',
            name: 'Chart',
            component: {
                render(c) { 
                    return c('router-view')
                }
            },
        },
    ],
})
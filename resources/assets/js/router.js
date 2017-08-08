import VueRouter    from 'vue-router'

// lazy load components
const Hello = (resolve) => require(['./components/Hello.vue'], resolve)
const Numbers = (resolve) => require(['./components/Number.vue'], resolve)
const Profile = (resolve) => require(['./components/Profile.vue'], resolve)

export default new VueRouter({
    mode: 'history',
    base: __dirname,
      routes: [
        { path: '/hello', component: Hello },
        { path: '/number', component: Numbers },
        { path: '/profile', component: Profile }
      ]
});
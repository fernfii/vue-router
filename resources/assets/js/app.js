require('./bootstrap');

import VueRouter  from 'vue-router'
import router     from './router'
import Vue        from 'vue'

Vue.use(VueRouter)

const Hello = (resolve) => require(['./components/Hello.vue'], resolve)
const Numbers = (resolve) => require(['./components/Number.vue'], resolve)
const Profile = (resolve) => require(['./components/Profile.vue'], resolve)

new Vue({

  router,

  components : {
    Hello,
    Numbers,
    Profile
  },

  data : {

  }
 
}).$mount('#app')

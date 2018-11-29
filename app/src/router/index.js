import Vue from 'vue'
import Router from 'vue-router'
import Login from '@/pages/Login'
import vueTopprogress from 'vue-top-progress'
import axios from 'axios'
import VueAxios from 'vue-axios'
import Notifications from 'vue-notification'

Vue.use(Router)
Vue.use(vueTopprogress)
Vue.use(VueAxios, axios)
Vue.use(Notifications)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Login',
      component: Login
    }
  ]
})

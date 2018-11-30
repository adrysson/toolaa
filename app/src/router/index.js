import Vue from 'vue'
import Router from 'vue-router'
import vueTopprogress from 'vue-top-progress'
import axios from 'axios'
import VueAxios from 'vue-axios'
import Notifications from 'vue-notification'

import Login from '@/pages/Login'
import Testes from '@/pages/Testes'

Vue.use(Router)
Vue.use(vueTopprogress)
Vue.use(VueAxios, axios)
Vue.use(Notifications)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Login',
      component: Login
    },
    {
      path: '/testes',
      name: 'Testes',
      component: Testes
    }
  ]
})

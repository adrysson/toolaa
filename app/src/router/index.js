import Vue from 'vue'
import Router from 'vue-router'
import Login from '@/pages/Login'
import vueTopprogress from 'vue-top-progress'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(Router)
Vue.use(vueTopprogress)
Vue.use(VueAxios, axios)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Login',
      component: Login
    }
  ]
})

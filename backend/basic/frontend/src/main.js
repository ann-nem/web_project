import Vue from 'vue'
import App from './App.vue'
import Axios from 'axios'
import router from './router'

Vue.config.productionTip = false

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

Vue.prototype.$http = Axios.create({
  baseURL: 'http://localhost:1199/api/v1'
})

Vue.prototype.$localStorage = localStorage

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')

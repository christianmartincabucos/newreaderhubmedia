import '@fortawesome/fontawesome-free/css/all.min.css'
import 'bootstrap/dist/css/bootstrap.min.css'
import "mdbootstrap/css/mdb.min.css"
import 'mdbvue/lib/mdbvue.css'
import '../public/style.css'
import 'jquery'
import 'popper.js'
import 'bootstrap/dist/js/bootstrap.min'
// import '@/assets/sass/app.scss'
import Vue from 'vue'
import router from './router'
import store from './store'
import axios from "axios"
import vuescroll from "vuescroll/dist/vuescroll-native"
import VueIziToast from "vue-izitoast"
import "izitoast/dist/css/iziToast.min.css";
import { ValidationObserver,ValidationProvider,extend,localize } from "vee-validate"
import en from "vee-validate/dist/locale/en.json"
import * as rules from "vee-validate/dist/rules"
import vSelect from "vue-select"
import App from './App.vue'

require("@/store/subscriber") 
Vue.component("v-select", vSelect)
Vue.use(vuescroll)
Vue.use(VueIziToast)
Vue.component("ValidationProvider", ValidationProvider)
// install rules and localization
Object.keys(rules).forEach(rule => {
  extend(rule, rules[rule])
})

localize('en', en)

// Install components globally
Vue.component('ValidationObserver', ValidationObserver)
Vue.component('ValidationProvider', ValidationProvider)

axios.defaults.baseURL = "http://127.0.0.1:8000/api"
Vue.config.productionTip = false

store.dispatch('auth/attempt', localStorage.getItem('token')).then(()=>{
  new Vue({
    router,
    store,
    render: h => h(App)
  }).$mount('#app')
})


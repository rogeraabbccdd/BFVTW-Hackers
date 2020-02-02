import '@babel/polyfill'
import 'mutationobserver-shim'
import Vue from 'vue'
import App from './App.vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import VueSweetalert2 from 'vue-sweetalert2'
import 'sweetalert2/dist/sweetalert2.min.css'
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faExternalLinkAlt, faExclamationTriangle, faDownload, faBan } from '@fortawesome/free-solid-svg-icons'
import { faYoutube } from '@fortawesome/free-brands-svg-icons'
import { ValidationProvider, ValidationObserver } from 'vee-validate'
import VueExcelXlsx from 'vue-excel-xlsx'
import VueGitHubButtons from 'vue-github-buttons'
import 'vue-github-buttons/dist/vue-github-buttons.css'

import './plugins/bootstrap-vue'
import './styles/bfv.stylus'
import './registerServiceWorker'
import './validateRules'

library.add(faExternalLinkAlt, faExclamationTriangle, faDownload, faBan, faYoutube)

Vue.component('ValidationProvider', ValidationProvider)
Vue.component('ValidationObserver', ValidationObserver)
Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.use(VueSweetalert2)
Vue.use(VueAxios, axios)
Vue.use(VueExcelXlsx)
Vue.use(VueGitHubButtons)

Vue.config.productionTip = false

new Vue({
  render: h => h(App)
}).$mount('#app')

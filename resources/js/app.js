
/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

import { createApp } from 'vue';
import router from './router';
import App from './App.vue'; 
createApp({
  components:{
        App
    }
}).use(router)
  .component('font-awesome-icon', FontAwesomeIcon)
  .mount('#app')


import Vue from 'vue';

import Chart from './Chart';
import router from './router';

require('./libraries/plugins');
require('./libraries/config');

new Vue({
    router,
    template: '<Chart />',
    components: { Chart },
}).$mount('#root')

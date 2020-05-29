window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const Vue = require('vue');

// register components
Vue.component('toggle-contained', require('./components/ToggleContained.vue').default);
Vue.component('toggle-slotted', require('./components/ToggleSlotted.vue').default);
Vue.component('cards-contained', require('./components/CardsContained.vue').default);
Vue.component('cards-slotted', require('./components/CardsSlotted.vue').default);

// this does not
new Vue({
  el: '#app',
});

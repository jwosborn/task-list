import Vue from "vue";
import App from "./App.vue";

Vue.config.productionTip = false;

new Vue({
    el: "#task-list",
    render: h => h(App)
});

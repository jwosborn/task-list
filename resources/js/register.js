import Vue from "vue";
import Register from "./components/Register";

Vue.component("Register", require("./components/Register").default);

new Vue({
    el: "#register",
    render: h => h(Register)
});

import Vue from "vue";
import Login from "./components/Login";

Vue.component("Login", require("./components/Login").default);

new Vue({
    el: "#login",
    render: h => h(Login),
    props: ["csrf"]
});

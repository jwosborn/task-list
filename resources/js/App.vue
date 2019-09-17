<template>
  <div id="app">
    <Header />
    <Tasks />
    <Footer />
  </div>
</template>

<script>
import Tasks from "./components/Tasks.vue";
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";

export default {
  name: "app",
  components: {
    Tasks,
    Header,
    Footer
  }
};
</script>

<style>
#app {
  font-family: "Nanum Gothic", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 10px;
}
h1 {
  margin: 0;
}

@import url("https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap");
</style> 
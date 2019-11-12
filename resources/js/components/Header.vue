<template>
  <div class="header-wrapper">
    <div class="banner-wrapper">
      <h1>TO-DO LIST</h1>
      <p v-if="user">Welcome, {{ user }}!</p>
    </div>
    <div class="login-wrapper">
      <a href="/login">Login</a>
      <a href="/register">New User? Create an account!</a>
      <a href="/logout">Logout</a>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  name: "Header",
  props: { user: String }
};
</script>

<style scoped>
h1 {
  margin: 0 auto;
  font-size: 6em;
}
.header-wrapper {
  display: flex;
  background: #8c756c;
  color: white;
  justify-content: space-evenly;
}
.banner-wrapper {
  display: flex;
  flex-direction: column;
  margin: auto 2em;
}

.login-wrapper {
  display: flex;
  flex-direction: column;
  margin-top: 1em;
}

a {
  color: white;
  margin: 0.5em auto;
}
@media (max-width: 1024px) {
  .header-wrapper {
    display: block;
    padding-bottom: 1.25em;
  }
  h1 {
    font-size: 7.5em;
  }
  .login-wrapper {
    display: inline;
  }
  a {
    margin: 0.5em 0.5em;
    font-size: 2em;
  }
  p {
    margin: 0.5em 0;
    font-size: 2em;
  }
}
</style>
<template>
  <div class="header-wrapper">
    <div class="banner-wrapper">
      <h1>TO-DO LIST</h1>
      <p v-if="user!=''">Welcome, {{ user }}! Not you?</p>
      <a href="/logout">Logout</a>
    </div>
    <div class="login-wrapper">
      <a href="/login">Login</a>
      <a href="/register">
        New User?
        <br />Create an account!
      </a>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  name: "Header",
  data() {
    return {
      user: ""
    };
  },
  created() {
    axios.get("api/user").then(res => (this.user = res.data));
  }
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
</style>
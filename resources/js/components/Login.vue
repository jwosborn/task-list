<template>
  <div class="login-wrapper">
    <header>
      <h1>Please Login to continue to the App.</h1>
    </header>
    <div class="form-group">
      <form method="POST" action="/login">
        <!-- {{ csrf_field() }} -->
        <p>Email</p>
        <input type="email" name="username" required />
        <p>Password</p>
        <input type="password" required />
        <input class="submit-button" type="submit" value="Login" />
      </form>
    </div>
    <div class="register">
      New User?
      <a href="/register">Register Here</a>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    error: "";
  }
};
</script>
<style scoped>
.login-wrapper {
  font-family: "Nanum Gothic", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 10px;
}
header {
  background-color: #8c756c;
  color: white;
}
h1 {
  margin: auto;
  padding: 3em auto;
}
form {
  background-color: #d9cdbf;
  padding-left: 1em;
  padding-top: 1em;
  padding-bottom: 0.5em;
}
.register {
  background-color: #d9cdbf;
  padding-top: 1em;
  padding-left: 1em;
  color: #2c3e50;
}
a:visited {
  color: #2c3e50;
}
</style>
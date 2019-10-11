<template>
  <div class="register-wrapper">
    <header>
      <h1>Please Create an account to use Task List.</h1>
    </header>
    <div class="form-group">
      <form method="POST" action="/register">
        <!-- {{ csrf_field() }} -->
        <p>Username</p>
        <input type="text" name="username" required />
        <p>Email</p>
        <input type="email" name="email" required />
        <p>Password</p>
        <input type="password" required />
        <input class="submit-button" type="submit" value="Register" />
      </form>
      <div class="login">
        Already have an account?
        <a href="/login">Login!</a>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
.register-wrapper {
  font-family: "Nanum Gothic", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  margin-top: 5px;
}
header {
  background-color: #8c756c;
  color: white;
  padding-bottom: 2em;
  text-align: center;
}
h1 {
  color: inherit;
}
form {
  padding-top: 1em;
  padding-left: 1em;
  background-color: #d9cdbf;
}

.login {
  background-color: #d9cdbf;
  padding-top: 1em;
  padding-left: 1em;
  color: #2c3e50;
}
a:visited {
  color: #2c3e50;
}
</style>
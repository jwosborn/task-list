<template>
  <div class="header-wrapper">
    <h1>TO-DO LIST</h1>
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
export default {
  name: "Header"
};
</script>

<style scoped>
h1 {
  margin: 0 auto;
  font-size: 5em;
}
.header-wrapper {
  display: flex;
  background: #8c756c;
  color: white;
}

.login-wrapper {
  display: flex;
  flex-direction: column;
}

a {
  color: white;
  margin: 0.5em auto;
}
</style>
<template>
  <div class="header-wrapper">
    <h1>TO-DO LIST</h1>
    <div>
      <a href="/login">Login</a>
      <a href="/register">New User? Create an account!</a>
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
</style>
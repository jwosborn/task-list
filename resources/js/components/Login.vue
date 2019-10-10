<template>
  <div>
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
  </div>
</template>
<script>
export default {};
</script>
<style scoped>
header {
  background-color: #8c756c;
  color: white;
}
h1 {
  margin: 1em auto;
}
form {
  background-color: #d9cdbf;
}
</style>
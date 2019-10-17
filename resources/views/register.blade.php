<!DOCTYPE html>
<html>

<link rel="stylesheet" href="{{ URL::asset('css/register.css') }}">
<body>
<div class="register-wrapper">
    <header>
      <h1>Please Create an account to use Task List.</h1>
    </header>
    <div class="form-group">
      <form method="POST" action="/register">
        @csrf
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
</body>
</html>
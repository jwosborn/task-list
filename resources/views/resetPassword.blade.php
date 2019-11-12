<!DOCTYPE html>
<html>

<link rel="stylesheet" href="{{ URL::asset('css/register.css') }}">
<body>
<div class="register-wrapper">
    <header>
      <h1>Forgot Your Password?</h1>
    </header>
    <div class="form-group">
      <form method="POST" action="/resetPassword">
        @csrf
        @if(Session::has('error'))
         <p class="alert">*{{ Session::get('error') }}</p>
        @endif
        <p>Email</p>
        <input type="email" name="email" required />
        <p>New Password</p>
        <input type="password" name="password" required />
        <p>Confirm New Password</p>
        <input type="password" name="confirm" required />
        <input class="submit-button" type="submit" value="Reset Password" />
      </form>
      <div class="login">
        Already have an account?
        <a href="/login">Login!</a>
      </div>
    </div>
  </div>
</body>
</html>
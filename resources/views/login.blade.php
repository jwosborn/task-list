<!DOCTYPE html>
<html>
<head>
  <title>Task List</title>
</head>
<link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
<body>
<div class="login-wrapper">
    <header>
      <h1>Please Login tooooo continue to the App.</h1>
    </header>
    <div class="form-group">
      <form method="POST" action="{{url('/login')}}">
      @csrf
        <p>Email</p>
        <input type="email" name="email" required />
        <p>Password</p>
        <input type="password" name="password"  />
        <input class="submit-button" type="submit" value="Login" />
      @if(Session::has('error'))
        <p class="alert">*{{ Session::get('error') }}</p>
      @endif
      </form>
    </div>
    <div class="register">
      Forgot Password? <a href='/resetPassword'>Reset it here.</a>
    </div>
    <div class="register">
      New User?
      <a href="/register">Register Here</a>
    </div>
  </div>
</body>

</html>
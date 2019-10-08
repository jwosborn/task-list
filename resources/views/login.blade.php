<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>

<body>
<header>
    <h1>Please Login to continue to the App.</h1>
</header>
    <div class='form-group'>
        <form method='POST' action='/login'>
            {{ csrf_field() }}
            <p>Email</p>
            <input type='email' name='username' required>
            <p>Password</p>
            <input type='password' required>
            <input class='submit-button' type='submit' value='Login'>
        </form>
    </div>

</body>

</html>
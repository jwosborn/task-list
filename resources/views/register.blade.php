<!DOCTYPE html>
<html>
<head>
  <title>Create An Account</title>
</head>

<body>
<header>
    <h1>Please Create an account to continue to the App.</h1>
</header>
    <div class='form-group'>
        <form method='POST' action='/register'>
            {{ csrf_field() }}
            <p>Username</p>
            <input type='text' name='username' required>
            <p>Email</p>
            <input type='email' name='email' required>
            <p>Password</p>
            <input type='password' required>
            <input class='submit-button' type='submit' value='Register'>
        </form>
    </div>

</body>

</html>
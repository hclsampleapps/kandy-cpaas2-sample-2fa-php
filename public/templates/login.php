<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>2FA | Login</title>
</head>
<body>
    <?php if (isset($alert)): ?> 
        <div class="alert alert-error">
        <p><?php echo $alert ?></p>
        </div>
    <?php endif; ?>
    <form action="/login" method="post">
        <h4>Authenticate using your account information</h4>
       <p id="loginResponse"></p>
    <div>
        <ul>
            <li>
                <label>User Email : </label>
                <input type="text" id="email" name="email" />
            </li>
            <li>
                <label>Password : </label>
                <input type="password" id="password" name="password" />
            </li>
        </ul>
    </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>
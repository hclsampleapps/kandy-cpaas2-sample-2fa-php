<!DOCTYPE html>
<html lang="en">
<head>
  <title>2FA | Verify</title>
</head>
<body>
   
	 <div>
        <h4>Authenticate via</h4>
        <ul>
            <form action="/sendcodeSMS" method="post">
                <li>
                    <button type="submit">SMS</button>
                </li>
            </form>
            <form action="/sendcodeEmail" method="post">
                <li>
                    <button type="submit">Email</button>
                </li>
            </form>
        </ul>
 <?php if (isset($alert)): ?>
        <div class="alert alert-error">
            <p><?php echo $alert ?></p>
        </div>
    <?php endif; ?>
    <?php if (isset($success_msg)): ?>
        <div class="alert alert-success">
            <p><?php echo $success_msg ?></p>
        </div>
    <?php endif; ?>
    </div>
	
    <hr>
    <div>
        <form action="/verify" method="post">
            <h4>Verify OTP</h4>
            <div>
                <ul>
                    <li>
                        <label>Enter OTP:</label>
                        <input type="text" id="code" placeholder="123456" maxlength="6" name="code" />
                    </li>
                </ul>
                <button type="submit">Verify</button>
            </div>
        </form>
    </div>
</body>
</html>





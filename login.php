<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles-login.css">
</head>
<body>
    <div class="container">
        <img src="login-icon.png" height="100px" width="100px">
        <h2>LOG IN</h2>
        
        <form action="login_backend.php" method="POST">
            <div class="input-box">
                <div class="input-field">
                    <label for="uname"><h4>Username :</h4></label>
                    <input type="text" name="uname" id="uname" maxlength="50" placeholder="Enter Username" required>
                </div>
                <div class="input-field">
                    <label for="pass"><h4>Password :</h4></label>
                    <input type="password" name="pass" id="pass" maxlength="50" placeholder="Enter Password" required>
                </div>
                <div class="input-field">
                    <button type="submit" id="submit">LOG IN</button>
                </div>
            </div>
        </form>

        <div class="create-account">
            <a href="regform.php">Create Account</a>
        </div>

    </div>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body>      
    <div class="login">
        <h2>Login</h2>
        <form class="login-form" action="includes/login.inc.php" method="post">
            <div class="user-name">
                <input type="text" name="userid" placeholder="Username">
            </div>
            <div class="password">
                <input type="password" name="pwd" placeholder="Password">
            </div>
            <div class="submit">
               <input type="submit" value="Submit" name="submit">
            </div>
        </form>
    </div>
</body>
</html>

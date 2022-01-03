<?php
require 'includes/login.inc.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
      <?php
      
      ?>
      
    <div class="login">
      <h2>Project 2: Login</h2>
        <form class="login-form" action="includes/login.inc.php" method="post">

          <div class="user-name">
              <input type="text" name="userid" placeholder="Username">
          </div>

            <div class="password">
                <input type="password" name="pwd" placeholder="Password">
            </div>
            <div class="submit">
               <button type="submit">Login</button>
                 <!-- <input type="submit" value="Login">-->
            </div>

        </form>
    </div>
      
      
  </body>
</html>

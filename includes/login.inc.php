<?php
require 'dbh.inc.php'; #database
    
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['userid'];
    $password = $_POST['pwd'];
    
    $sql = "SELECT * FROM test_table WHERE username='".$username."' AND password='".$password."';";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    

    if ($row['usertype']=='admin'){
        echo "admin";
    }
    
    elseif ($row['usertype']=='web developer'){
        echo "web developer";
    }
    
     elseif ($row['usertype']=='salesman'){
        echo "salesman";
    }
    
}

if (isset($_POST['login-submit'])){
    if (empty($username) || empty($password)){
        header ("Location: ../index.php?error=emptyfields");
        exit();
    }
    else {
        $sql_check= "SELECT * FROM test_table WHERE username=? ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql_check)){
            header("Location: ../index.php?error=sqlerror");
            exit();
            }
        ################ NOT GETTING INTO THIS LINE ##########################
        else{
            mysqli_stmt_bind_param($stmt, "ss", $username, $username);
            mysqli_stmt_execute($stmt);
            $result_stmt = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_array($result_stmt)){
               $pwdCheck = password_verify($password, $result_stmt['password']);
                if($pwdCheck == false){
                    header("Location: ../index.php?error=wrongpwd");
                    }
                
                
                 else if($pwdCheck == true){
                    session_start();
                    $_SESSION['userid'] = $row['username'];                    
                    header("Location: ../login.php?login=success");
                    exit();
                    }
                }
            
     else {
            header ("Location: ../index.php?error=nouser");
            exit ();
            }
            
            
            }
        ###################################################
        }
    }


?>

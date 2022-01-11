<?php
require 'dbh.inc.php'; #database
    
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['userid'];
    $password = $_POST['pwd'];
    if (!isset($_POST['userid'], $_POST['pwd']) ) {
        exit('Please fill both the username and password fields!');
    }
}

if (isset($_POST['submit']) && !empty($_POST['submit'])){
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
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result_stmt = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_array($result_stmt);
            if($row){
               # This will only work if we use hashed passwords
                $pwdCheck = password_verify($password, $row['password']);
                if (!$pwdCheck) {
                    header("Location: ../index.php?error=wrongpwd");
                }
                else {
                    session_regenerate_id();
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['name'] = $row['username'];  
                    $_SESSION['id'] = $row['id'];
                    header(checkRole($row['usertype']));
                }
            }
            else {
                header ("Location: ../index.php?error=nouser");
                exit ();
            }
            
        }
        ###################################################
    }
} else {
    exit('Something went wrong');
}

function checkRole($role) {
    $usertype = array(
        'admin' => 'Location: ../home.php',
        'web developer' =>  'Location: ../home2.php',
        'salesman' =>  'Location: ../home3.php',
    );
    return $usertype[$role];
}

?>

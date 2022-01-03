<?php
session_start();
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "test";
$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);




$sql_check= "SELECT * FROM test_table WHERE username=?;";


$stmt=$conn->prepare($sql_check);
$stmt->bind_param('ss', $username,$username);
$stmt-> execute();
$stmt->bind_result($username);
while ($stmt->fetch()){
    
    echo $username;
}







if (!$conn){
    die ("connection failed: ".mysqli_connect_error());
}

    
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



?>
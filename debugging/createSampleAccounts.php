<?php
$password = '1234';
$password = password_hash($password, PASSWORD_DEFAULT);
print_r($password);

?>
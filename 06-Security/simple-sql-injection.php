<?php
$con = mysqli_connect('localhost','root','','akeyinfraa');
$uid = "' OR 1 = 1 -- ";

$pwd = "1e9bc3587302f1704bb34c27b672e02d";

$uid = mysqli_real_escape_string($con, "' OR 1 = 1 -- ");
$pwd = mysqli_real_escape_string($con, "1234");

$sql = "SELECT * FROM clients WHERE user_name = '$uid' AND password_hash = '$pwd';";

echo $sql;

?>
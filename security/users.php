<?php

$uid = mysqli_real_escape_string("' OR 1 = 1 -- ");

$pwd = mysqli_real_escape_string("1234");

$sql = "SELECT uid,pwd,role FROM users WHERE uid = '$uid' AND password = '$pwd';";

echo $sql;

?>
<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "data";
    $table = "problems";
    
    mysql_connect("$host", "$username", "$password") or die ("Could not connect.");
    mysql_select_db("$db_name") or die ("Could not select database.");
?>


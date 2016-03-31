<?php
    $host = "sql.studhy.com";
    $username = "studhyadmin";
    $password = "paidhardstudyingeverything";
    $db_name = "studhybank";
    $table = "problems";
    
    mysql_connect("$host", "$username", "$password") or die ("Could not connect.");
    mysql_select_db("$db_name") or die ("Could not select database.");
?>
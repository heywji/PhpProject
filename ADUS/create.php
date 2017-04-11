<?php
include("conn.php");
$username_of_index_php=$_GET["userne"];
$password_of_index_php=$_GET["passwd"];
$chk="/^[a-zA-Z0-9]+$/";
if(!preg_match($chk,$username_of_index_php)){
    die("非法");
}else{
    print("<h1>");
    print($username_of_index_php);
    print("<br>");
    print($password_of_index_php);
    print("</h1>");
}

mysql_query(" INSERT INTO `web_table` (`userne`,`passwd`) 
                     VALUES ('$username_of_index_php',password('$password_of_index_php')) ");

mysql_query("UPDATE `web_table` SET passwd=password('$password_of_index_php')
                      WHERE userne='$username_of_index_php'");
# 千万注意 `table_name` ``````````````````````
header("location:select.php");
?>

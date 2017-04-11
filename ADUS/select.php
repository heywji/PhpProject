<?php
include ("conn.php");
if($result=mysql_query("select * from web_table")) {
    while ($row = mysql_fetch_array($result))
        print("username:  ".$row['userne']." <- This's username<br>"."password:   ".$row['passwd']."<br>");

print("<br>EXIT 0");
}
?>
<?php
    mysql_query("create table web_table(
    id int AUTO_INCREMENT,
    PRIMARY KEY(id),
  	userne varchar(10) CHARACTER SET utf8  UNIQUE,
    passwd varchar(16)) ;")
    or die("<h1>TABLE Of DATABASE Exist !!!</h1>
    <h3>You Can Click <a href='drop_table.php'>THIS</a> to Delete Table
    <br>
    Click <a href='index.php'>THIS</a> You Can Add Something,too
    </h3>");
?>
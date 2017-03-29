<html>
<head>
    <title>PHP操作MYSQL进行增操作</title>
</head>
<body>
<h1>
<?php
header("content-type:text/html; charset=UTF-8");
mysql_connect("127.0.0.1","rabbit","123456");

if (mysql_query("drop database rwsql")){
    echo "已删除<br>";
}else{
    echo "未能执行<br>";
}
if (mysql_query("create database rwsql")){echo "yes<br>";}else{echo "no<br>";};
# 判断是否正确执行
mysql_select_db("rwsql");
mysql_query("set names utf8");

mysql_query("
    create table testtt(
    id int not null primary key auto_increment,
    name varchar(10),
    password varchar(20)
    )"
);
# primary key(id) 也可

$sql = "INSERT INTO `testtt` (`id`,`name`,`password`) VALUES (NULL, 'testuser', 'null')";
//注意写法，系统原有的用``，用户输入的才能单双引
mysql_query($sql);
mysql_close();
?></h1>
</body>
</html>

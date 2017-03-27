<html>
<head>
    <title>aaa</title>
    <script>
        function timesleep() {
            window.location.reload(true)
        }
        window.setTimeout(timesleep,1000);
    </script>
</head>
<body>
<h1>
<?php
header("content-type:text/html; charset=UTF-8");
//定义 php 类型为文本或html; 设置字符为 UTF-8
mysql_connect("127.0.0.1","rabbit","123456");
//使用 mysql_connect 方法定义服务器为"本机"，用户名为"rabbit"，密码为"123456"
mysql_select_db("testtt");
//使用 mysql_select_db 方法确定数据库名称为"testtt"
mysql_query("set names utf8");
//使用 mysql_query 执行(询问) 设置字符集 临时!
$sql = mysql_query('select * from firstable');
//赋值

//foreach (mysql_fetch_array($sql) as $row2){
//    print "$row2<br>";
//}
####上面的注释是因为无法全部显示###

while ( $rows = mysql_fetch_array($sql) ) {
//判断为真则持续执行
    print "id:$rows[0]<br>name:$rows[1] &nbsp&nbsp&nbsp passwd:$rows[2]<br>$rows[3]<br><br>";
}
?>
</h1>
</body>
</html>

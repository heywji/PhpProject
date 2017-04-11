<?php
    include("conn.php");
    mysql_query("use wwwroot");
    mysql_query("drop table web_table") and printf("<h1>Delete Finished</h1>");
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="application/javascript">
        setTimeout("javascript:location.href='index.php'",1500);
    </script>
</head>
<body>
</body>
</html>

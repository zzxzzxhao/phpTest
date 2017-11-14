<?php
$conn=mysql_connect("localhost","root","root") or die("数据库连接错误！");
mysql_select_db("article",$conn);
mysql_query("set names 'utf8'");//utf-8编码
?>
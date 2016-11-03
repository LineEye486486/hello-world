<?php
error_reporting(0);
$conn = @mysql_connect("localhost","root","")or die("数据库链接错误");
mysql_select_db("moni",$conn);
mysql_query("set names 'utf8");
?>
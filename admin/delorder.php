<?php

$link=mysql_connect("localhost","root","") or die("Can't Connect....");
mysql_select_db("book") or die("Can't Connect to Database....");

$query="delete from orders where o_id=".$_GET['sid'];

mysql_query($query,$link) or die("Can't Execute...");

header("location:order.php");
?>
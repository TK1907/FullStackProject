<?php

$link=mysql_connect("localhost","root","") or die("Can't Connect....");
mysql_select_db("book") or die("Can't Connect to Database....");

$query="delete from contact where id=".$_GET['id'];

mysql_query($query,$link) or die("Can't Execute...");

header("location:contact.php");
?>
<?php
session_start();
if(empty($_POST['name']) && empty($_POST['phone']) && empty($_POST['addrs']))
{	
	echo "<script type='text/javascript'>";
	echo "alert('Fill All Fields...')";
	echo "</script>";
	header("location:viewcart.php");
}
else
{
$link=mysql_connect("localhost","root","") or die("Can't Connect....");

mysql_select_db("book") or die("Can't Connect to Database....");
$bn=$_POST['book_nm'];
$nm=$_POST['name'];
$ph=$_POST['phone'];
$ad=$_POST['addrs'];
$q="insert into orders(o_name,o_phone,o_address,bname) values('$nm','$ph','$ad','$bn')";
mysql_query($q,$link) or die("Can't Execute Query....".mysql_error());
header("location:viewcart.php");
}
?>
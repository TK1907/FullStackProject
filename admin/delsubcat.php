<?php

if(empty($_POST['delsubcat']))
	echo "No Selected Category";

else
{
	$link=mysql_connect("localhost","root","") or die("Can't Connect....");
	mysql_select_db("book",$link) or die("Can't Connect to Database....");
	
	$delsub=$_POST['delsubcat'];
	
	$q="delete from subcat where subcat_id='$delsub' ";
	
	mysql_query($q,$link) or die("Unable to Execute Query...");
	
	$q1="delete from books where subcat=".$delsub;
	mysql_query($q1,$link);
	
	
	header("location:category.php");
}
?>
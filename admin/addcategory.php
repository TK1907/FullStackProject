<?php

if(!empty($_POST))
{
	if(empty($_POST['cat']))
	{
		$msg[]="Please Fill all Fields...";
	}
	
	if(!empty($msg))
	{
		echo'<b>Error:-</b><br>';
		foreach($msg as $k)
		{
			echo '<li>'.$k;
		}
	}
	else
	{
		$link=mysql_connect("localhost","root","") or die("Can't Connect.....");
		mysql_select_db("book",$link) or die("Can't Connect To Database...");
		
		$cat=$_POST['cat'];
		$q="insert into category(cat_name) values('$cat')";
		
		mysql_query($q,$link) or die("Can't Execute Query");
		mysql_close($link);
		
		header("location:category.php");
	}
}
else
{
	header("location:index.php");
}
?>
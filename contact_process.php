<?php

if(!empty($_POST))
{
	$msg=array();
	
	if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['quer']))
	{
		$msg[]="Please full fill all fields...";
	}
	
	if(is_numeric($_POST['name']))
	{
		$msg[]="Name should be in string format...";
	}
	
	if(!empty($msg))
	{
		echo '<b>Error:-</b><br>';
		foreach($msg as $k)
		{
			echo '<li>'.$k;
		}
	}
	else
	{
		$nm=$_POST['name'];
		$mail=$_POST['email'];
		$question=$_POST['quer'];
		
		$link=mysql_connect("localhost","root","") or die("Can't Connect....");
		mysql_select_db("book",$link) or die("Can't Connect to Database....");
		
		$query="insert into contact(name,email,ques) values('$nm','$mail','$question')";
		mysql_query($query,$link) or die("Can't Execute Query");
		echo 'Your query submitted...';
		header("location:contact.php");
		
	}
}
else
{
	header("location:index.php");
}
?>
<?php

if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['fname']) || empty($_POST['unm']) || empty($_POST['pass']) || empty($_POST['cpass']) || empty($_POST['gender']) || empty($_POST['email']) || empty($_POST['contact']) || empty($_POST['city']))
			{
				$msg.="<li>Please full fill all fields...";
			}
		if($_POST['pass']!=$_POST['cpass'])
			{
				$msg.="<li>Please enter your password again...";
			}
		if(strlen($_POST['pass'])<6 && strlen($_POST['pass'])>12)
			{
				$msg.="<li>Please enter your password in limited format...";
			}
		if(is_numeric($_POST['fname']))
			{
				$msg.="<li>Name must be in characters...";
			}
		if($msg!="")
			{
				header("location:register.php?error=".$msg);
			}
	else
	{
		$fnm=$_POST['fname'];
		$unm=$_POST['unm'];
		$pass=$_POST['pass'];
		$gender=$_POST['gender'];
		$mail=$_POST['email'];
		$contact=$_POST['contact'];
		$city=$_POST['city'];
		
		
		$link=mysql_connect("localhost","root","") or die("Can't Connect.....");
		
		mysql_select_db("book",$link) or die("Can't Connect to Database....");
		
		$query="insert into user(fname,uname,pass,gender,email,contact,city)
				values('$fnm','$unm','$pass','$gender','$mail','$contact','$city')";
		
		mysql_query($query,$link) or die("Can't Execute Query......");
		
		header("location:register.php?ok=1");
	}
	}
else
{
	header("location:index.php");
}
?>
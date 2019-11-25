<?php session_start();

if(!empty($_POST))
{
	$msg="";
	
	if(empty($_POST['user']))
	{
		$msg[]="No Such User Exists...";
	}
	
	if(empty($_POST['pass']))
	{
		$msg[]="Password Incorrect....";
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
		$unm=$_POST['user'];
		$pass=$_POST['pass'];
		
		$link=mysql_connect("localhost","root","") or die("Can't Connect....");
		mysql_select_db("book") or die("Can't Connect to Database");
		
		$q="select * from user where uname='$unm'";
		$res=mysql_query($q,$link) or die("Wrong Query");
		
		$row=mysql_fetch_assoc($res);
		
		if(!empty($row))
		{
			if($pass==$row['pass'])
			{
				$_SESSION=array();
				$_SESSION['unm']=$row['uname'];
				$_SESSION['uid']=$row['pass'];
				$_SESSION['status']=true;
				
				if($_SESSION['unm']=="admin")
				{
					header("location:admin/index.php");
				}
				else
				{
					header("location:./index.php");
				}
			}
			else
			{
			echo 'Incorrect Password....';
			}
		}
		else
		{
			echo 'Invalid User....';
		}
	}
}
else
{
	header("location:index.php");
}
?>
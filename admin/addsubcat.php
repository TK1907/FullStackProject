<?php
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['parent'])|| empty($_POST['subcat']))
		{
			$msg[]="Please Fill all Fields....";
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
			$link=mysql_connect("localhost","root","") or die("Can't Connect...");
			
			mysql_select_db("book",$link) or die("Can't Connect to Database....");
			
			$parent=$_POST['parent'];
			$sub=$_POST['subcat'];
			
			$q="insert into subcat(parent_id,subcat_name) values('$parent','$sub')";
			
			mysql_query($q,$link) or die("Can't Execute....");
			mysql_close($link);
			
			header("location:category.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>
<?php

	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['book'])|| empty($_POST['desc'])|| empty($_POST['edition'])|| empty($_POST['publisher'])|| empty($_POST['price']))
		{
			$msg[]="Please Full fill all fields....";
		}
		
		if(!(is_numeric($_POST['price'])))
		{
			$msg[]="Price must be in Numeric Format....";
		}
		
		if(empty($_FILES['img']['name']))
		{
			$msg[]="Please provide a file..";
		}
		
		if ((($_FILES["img"]["type"] == "image/gif") || 
				($_FILES["img"]["type"] == "image/jpeg") || 
				($_FILES["img"]["type"] == "image/pjpeg")))
		{		
		if($_FILES['img']['error']>0)
		{
		$msg[]="Error Uploading File..";
		}			
		}
		
		if(file_exists("../upload_image/".$_FILES['img']['name']))
		{
			echo $_FILES['img']['name']."already exists.";
		}
		if(empty($_FILES['ebook']['name']))
		$msg[]="Please provide a document file...";
		
		if ((($_FILES["ebook"]["type"] == "image/gif") || 
				($_FILES["ebook"]["type"] == "image/jpeg") || 
				($_FILES["ebook"]["type"] == "image/pjpeg")))
		{
		if($_FILES['ebook']['error']>0)
		$msg[]="Error Uploading Document file..";
		}
		
		if(file_exists("../upload_ebook/".$_FILES['ebook']['name']))
		{
		echo $_FILES['ebook']['name']."already exists.";
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
			move_uploaded_file($_FILES['img']['tmp_name'],"../upload_image/".$_FILES['img']['name']);
			$img="upload_image/".$_FILES['img']['name'];
			
			move_uploaded_file($_FILES['ebook']['tmp_name'],"../upload_ebook/".$_FILES['ebook']['name']);
			$ebook="upload_ebook/".$_FILES['ebook']['name'];
			
			$nm=$_POST['book'];
			$cat=$_POST['cat'];
			$des=$_POST['desc'];
			$edi=$_POST['edition'];
			$pub=$_POST['publisher'];
			$price=$_POST['price'];
			
			$link=mysql_connect("localhost","root","") or die("Can't Connect....");
			mysql_select_db("book") or die("Can't Connect to Database....");
			
			$query="insert into books(name,subcat,bdesc,edition,publisher,price,img,pdf) 						                    values('$nm','$cat','$des','$edi','$pub',$price,'$img','$ebook')";
			
			mysql_query($query,$link) or die("Can't Execute Query...".mysql_error());
			header("location:book.php");
		}
	}
		else
		{
			header("location:index.php");
		}
?>
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="default.css" rel="stylesheet" type="text/css">
</head>

<body>

<div>
	<?php include("includes/menu.php"); ?>
</div>

<div class="logo">
	<?php include("includes/logo.php"); ?>
</div>
<div class="page">
	<div class="content">
    	<h1 class="h1">Book</h1>
        <div class="entry">
    	<form action="addbook.php" method="post" enctype="multipart/form-data">
        <b>Book Name</b>
        <br>
        <input type="text" name="book" size="45"><br><br>
        <b>Category</b>
        <br>
        <select style="width:170px;" name="cat">
        	<?php
				$link=mysql_connect("localhost","root","") or die("Can't Connect....");
						mysql_select_db("book",$link) or die("Can't Connect to Database....");
					
						$query="select * from category";
						$res=mysql_query($query,$link);
						
						while($row=mysql_fetch_assoc($res))
						{
							echo '<option disabled>'.$row['cat_name'];
							$q="select * from subcat where parent_id=".$row['id'];
							
							$ress=mysql_query($q,$link);
							
							while($roww=mysql_fetch_assoc($ress))
							{
							echo '<option value="'.$roww['subcat_id'].'">--->'.$roww['subcat_name'];
							}
						}
						mysql_close($link);
						?>
        </select><br><br>
        
        <b>Description</b>
        <br>
        <textarea rows="6" cols="40" name="desc"></textarea><br><br>
        
        <b>Edition</b>
        <br>
        <input type="text" name="edition" size="45"><br><br>
        
        <b>Publisher</b><br>
        <input type="text" name="publisher" size="45"><br><br>
        
        <b>Price</b><br>
        <input type="text" name="price" size="45"><br><br>
        
        <b>Images</b><br>
        <input type="file" name="img"><br><br>
        
        <b>E-Book</b><br>
        <input type="file" name="ebook"><br><br>
        
        <input type="submit" value="ADD" name="addbook">
        </form>
        </div>
        </div>
       </div>
        
<div style="clear:both";></div>
</div>
<br>
<div class="footer">
<?php include("includes/footer.php");?>
</div>

</body>
</html>
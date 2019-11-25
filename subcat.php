<?php 
$link=mysql_connect("localhost","root","")or die("Can't Connect...");
	mysql_select_db("book") or die("Can't Connect to Database...");
	$cat=$_GET['cat'];
	
	$q = "select * from subcat where parent_id = ".$_GET['cat'];
	$res = mysql_query($q) or die("Can't Execute Query..");
	
	$row1 = mysql_fetch_assoc($res);
	
	if($_GET['cat']==$row1['subcat_name'])
	{
	header("location:booklist.php?subcatid=".$row1['subcat_id']."&subcatnm=".$row1["subcat_name"]);
		
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BookShop</title>
<link href="menu.css" rel="stylesheet" type="text/css">
</head>

<body>

<div>
<?php include("includes/menu.php");?>
</div>

<div class="logo">
<?php include("includes/logo.php");?>
</div>

<div class="page">
	<div class="content">
		<div class="post">
			<h1><?php echo $_GET['catnm'];?></h1>
            <div class="entry">
            
            <?php
			Do{
				echo '<li><a href="booklist.php?subcatid='.$row1['subcat_id'].'&subcatnm='.$row1['subcat_name'].'">'.$row1['subcat_name'].'</a></li>';
			
				}while($row1=mysql_fetch_assoc($res));
				
			?>
            </div>
          </div>
        </div>
        
        <div class="sidebar">
        	<?php include("includes/search.php");?>
        </div>
        
    <div style="clear:both";>
    </div>
    
    <br>
 <div class="footer">
 	<?php include("includes/footer.php");?>
    </div>
</body>
</html>
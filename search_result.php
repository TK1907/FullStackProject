<?php
$link=mysql_connect("localhost","root","")or die("Can't Connect...");
	
	mysql_select_db("book") or die("Can't Connect to Database...");
	
	$search=$_GET['s'];
	$query="select * from books where name like '%$search%'";
	
	$res=mysql_query($query,$link) or die("Can't Execute Query...");

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
            	<div class="entry">
            	<table border="0" width="100%">
                
                <?php
				$count=0;
				
				while($row=mysql_fetch_assoc($res))
				{
					if($count==0)
					{
						echo'<tr>';
						
					}
	$qu="select subcat_name from subcat where parent_id=".$row['id'];	
	$r=mysql_query($qu,$link) or die("Can't execute query".mysql_error());
		$row1=mysql_fetch_assoc($r);			
					echo'<td valign="top" width="20%" align="center">
						<a href="detail.php?id='.$row['id'].'">
						<img src="'.$row['img'].'"width="80" height="100">
						<br>'.$row['name'].'</a>
						</td>';
						$count++;
						
						if($count==4)
						{
							echo'</tr>';
							$count=0;
						}
				}
				?>
               </table>
            </div>
         </div>
      </div>
      
      <div class="sidebar">
      	<?php include("includes/search.php");?>
      </div>
  </div>
  
  <div style="clear:both";>
  </div>
  <br>
  
  <div class="footer">
  	<?php include("includes/footer.php");?>
  </div>
</body>
</html>
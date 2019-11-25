<?php session_start();

	$link=mysql_connect("localhost","root","");
	mysql_select_db("book") or die("Can't Connect to Database....");
	$id=$_GET['id'];
	$q="select * from books where id=$id";

	$res=mysql_query($q,$link) or die("Can't Execute Query...");
	$row=mysql_fetch_assoc($res);
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

<div class="logo-wrap">
	<div class="logo">
		<?php include("includes/logo.php");?>
	</div>
</div>

<div class="page">
	<div class="content">
    <h2><?php echo $row['name'];?></h2>
		<div class="post">
			<?php
				echo '<table  width="100%">
				<tr>
				<td><hr color="purple"></td>
				</tr>
				<tr align="center" bgcolor="#CCCCCC">
				<td><b>Item Details</b></td>
				</tr>
				</table>
				<br>
				<table width="100%" bgcolor="#996600">
				<tr>
					<td width="15%" rowspan="3" align="center">
					<img src="'.$row['img'].'" width="100">
					</td>
				<tr>
					<td width="50%">

					<table width="100%" height="100%">
					<tr valign="top">
						<td align="right" width="15%">Name:</td>
						<td align="left">'.$row['name'].'</td>
					</tr>
					
					<tr>
						<td align="right">Publisher:</td>
						<td align="left">'.$row['publisher'].'</td>
					</tr>
					
					<tr>
						<td align="right">Edition:</td>
						<td align="left">'.$row['edition'].'</td>
					</tr>
					
					<tr>
						<td align="right">Price:</td>
						<td align="left">'.$row['price'].'</td>
					</tr>
					</table>
				</td>
			</tr>
		</table>
		
		<table width="100%" bgcolor="#666666">
<br><br>
		<tr align="center" bgcolor="#00CC66">
			<td>DESCRIPTION</td>
		</tr>
		</table><p>
		'.$row['bdesc'].'</p>
		<br>
		<table width="100%">
		<tr align="center" bgcolor="#999999">';
		
		if(isset($_SESSION['status']))
		{
			//echo '<td><a href="processcart.php?nm='.$row['name'].'&cat='.$_GET['id'].'&rate='.$row['price'].'">
			echo '<td><a href="processcart.php?nm='.$row['name'].'&cat='.$row['subcat'].'&rate='.$row['price'].'">
			<img src="images/addcart.jpg">
			</a></td>';
		}
			
		else
		{
			echo '<td><img src="images/addcart.jpg"><br>
			<a href="index.php"> <h3>Please Login....</h3></a>
			</td>';
		}
			echo '</tr>
			</table>';
			?>	
		</div>
	</div>

<div class="sidebar">
<?php
	include("includes/search.php");
?>
</div>
<div style="clear:both";></div>
</div>
<br>
<div class="footer">
<?php include("includes/footer.php");?>
</div>

</body>
</html>
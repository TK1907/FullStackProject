<?php session_start(); 
	$link=mysql_connect("localhost","root","") or die("Can'r Connect....");
	mysql_select_db("book") or die("Can't Connect to Database....");
	$q="select * from orders";
	$res=mysql_query($q,$link) or die("Can't Execute the Query....".mysql_error());
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="default.css" rel="stylesheet" type="text/css">
</head>

<body>
<div>
	<?php include("includes/menu.php");?>
</div>

<div class="logo">
	<?php include("includes/logo.php"); ?>
</div> 

<div class="page">
	<div class="content">
    	<table border="1" width="100%">
        <tr align="center">
        	<td width="10%"><b>NO.</b></td>
            <td width="20%"><b>NAME</b></td>
            <td width="20%"><b>PHONE</b></td>
            <td width="40%"><b>ADDRESS</b></td>
            <td width="20%"><b>BOOK</b></td>
            <td width="10%"><b>DELETE</b></td>
        </tr>
        <?php
			$count=1;
			while($row=mysql_fetch_assoc($res))
			{
				echo '<tr align="center">
							<td>'.$count.'
							<td>'.$row['o_name'].'
							<td>'.$row['o_phone'].'
							<td>'.$row['o_address'].'
							<td>'.$row['bname'].'
							<td><a href="delorder.php?sid='.$row['o_id'].'"><img src="images/drop.png"></a>
							</tr>';
					$count++;
			}
        ?>
        
        </table>
    </div>
</div>

<div style="clear:both";></div>
</div>
<br><br>
<div class="footer">
<?php include("includes/footer.php");?>
</div>

</body>
</html>
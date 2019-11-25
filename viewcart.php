<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="menu.css" rel="stylesheet" type="text/css">
<head>

<title>BookShop</title>
</head>
<body>
<div>
	<?php include("includes/menu.php"); ?>
</div>

	<div class="logo">
		<?php include("includes/logo.php");?>
	</div>

<div class="page">
	<div class="content">
		<div class="post">
			<h1 class="h1">ViewCart</h1>
	         <div class="entry">
			<form action="processcart.php" method="POST">
			 <table width="100%" border="0">
								<tr >
									<td> <b>No
									<td> <b>Category
									<td> <b>Product Name
									<td> <b>Qty
									<td> <b>Rate
									<td> <b>Price
									</tr>
			<tr><td colspan="6"><hr style="border:1px Solid #066;"></tr>
			<?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											</tr>
											';
											$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									}
									}
								
								?>
							<tr><td colspan="6"><hr style="border:1px Solid #066;"></tr>
							
								<tr>
							<td colspan="6" align="right">
							<h3>Total:</h3>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="6"><hr style="border:1px Solid #066;"></tr>
							
							<Br>
								</table>						
									<br><br>
							<center>
							<input type="submit" value=" Calculate " >
							</center>
							</form>
                       <br><br>
		<hr style="border:1px Solid #066;">
<h3 align="center"><font color="#003399">Place Order</font></h3>
        <hr style="border:1px Solid #066;">
        <br>
                <table width="60%">
                <form action="processorder.php" method="post">
                <tr>
                <td align="right">Name:</td>
                <td><input type="text" name="name" size="35" style="border:1px solid #0C0"></td>
                </tr>
                <tr>
                <td align="right">Phone No:</td>
                <td><input type="text" name="phone" size="35" style="border:1px solid #0C0"></td>
                </tr>
                <tr>
                <td align="right">Address:</td>
                <td><textarea rows="4" cols="30"  name="addrs" style="border:1px solid #0C0"></textarea></td>
                </tr>
                <tr><td align="right">Book:</td>
                <td><?php 
						if(isset($_SESSION['cart']))
						{
							foreach($_SESSION['cart'] as $id=>$x)
						echo '<input type="text" name="book_nm" size="35" readonly style="border:1px solid #0C0" value="'.$x['nm'].'">';
						}
						?></td></tr>
                <tr><td>&nbsp;</td></tr> 
                <tr><td colspan="2" align="center">
                <input type="submit" value="Order Now"></td></tr>
                </form>
                </table>
                
							</div>
							
						</div>
						
					</div>
					<div class="sidebar">
<?php
	include("includes/search.php");
?>
</div>
</div>
</div></div>
<div style="clear:both";>
</div>

<div class="footer">
<?php include("includes/footer.php");?>
</div>
</body>
</html>
<?php session_start();
	if(!(isset($_SESSION['status'])&& $_SESSION['unm']=="admin"))
	{
	header("location:index.php");
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href="default.css" rel="stylesheet" type="text/css">
</head>

<body>
<div>
	<?php include("includes/menu.php"); ?>
</div>

<div>
	<div class="logo">
		<?php include("includes/logo.php");?>
	</div>
</div>
<div class="page">
	<div class="post">
    	
			<h1 class="h1">Welcome to Admin...</h1>
<marquee direction="left" behavior="scroll" height="220" width="100%" onMouseOver="stop();" onMouseOut="start();">
<img src="images/archi.jpg" height="200px" width="200">
<img src="images/economics 2.jpg" height="200px" width="200">
<img src="images/fiction_harry_potter_a.jpg" height="200" width="200">
<img src="images/forest 5.jpg" height="200" width="200">
<img src="images/books_terrorism_facts_myth.jpg" height="200" width="200">
<img src="images/tour.jpg" height="200" width="200">
<img src="images/yoga.jpg" height="200" width="200">
</marquee>

	</div>
</div>

<div style="clear:both";></div>
</div>
<br>
<br>
<br>
<div class="footer">
<?php include("includes/footer.php");?>
</div>

</body>
</html>
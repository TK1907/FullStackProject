<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BookShop</title>
<link href="menu.css" rel="stylesheet" type="text/css">
</head>

<body>

<div>
	<?php include("includes/menu.php"); ?>
</div>

<div class="logo-wrap">
	<div class="logo">
		<?php include("includes/logo.php");?>
	</div>
</div>
<div class="page">
<div class="sidebar">
<?php
	include("includes/search.php");
?>
</div>


	<div class="content">
    <div class="post">
    <h1>Contact Us</h1>
		<div class="entry">
       	<form name="cont" action="contact_process.php" method="post">

        Name:<br />
        <input type="text" name="name" size="30" />
        <br /><br />
        E-mail Id:<br />
        <input type="text" name="email"  size="30"/>
        <br /><br />
        Query:<br />
        <textarea cols="40" rows="10" name="quer" /></textarea>
        <br /><br />
        <input type="submit" value="   Ok   " />
        </form>
    </div>
    </div>
</div>
</div>
<div style="clear:both";></div>
</div>

<div class="footer">
<?php include("includes/footer.php");?>
</div>

</body>
</html>
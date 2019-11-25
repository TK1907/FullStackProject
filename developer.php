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
    	<?php include("includes/search.php"); ?>
    </div>
<div class="content">
<div class="post">
	<h3 align="center">Developer And Management Team</h3>
    <br>
    <h4>Information About Developers:</h4>

    <h3><u>Rituraj:</u></h3>
        <ul><li>Mobile No.<font color="#000099"> 09058340763</font></li></ul>
    
    <h3><u>Sonam Pathak:</u></h3>
    <ul><li>Mobile No.<font color="#000099"> 09451273160</font></li></ul>

    <h3><u>Mohd. Shanu Quraishi:</u></h3>
        <ul><li>Mobile No.<font color="#000099"> 09897985140</font></li></ul>

    <br>
    
    <center><h4>Contact Us:</h4></center>
    <center><font color="000099"> 08800447470</font></center> 
    <br>
    <br>
    <font face="Times New Roman, Times, serif">The Software used in The BookShop Project :<font color="#000099">PHP,MYSQL,WAMP.</font></font>
    
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
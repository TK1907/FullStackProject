

<ul class="ul">
<li><a href="index.php">Home</a></li>
	
    <?php
	if(isset($_SESSION['status']))
	{
		echo '<li><a href="logout.php">Logout</a></li>';
	}
	else
	{
		echo '<li><a href="register.php">Register</a></li>';
	}
?>
<li><a href="contact.php">Contact</a></li>
<li><a href="about.php">About</a></li>
<li><a href="viewcart.php">Viewcart</a></li>
</ul>


<ul class="ul">
		<li><a href="/College_project/admin/index.php">Home</a></li>
		<li><a href="category.php">Category</a></li>
		<li><a href="book.php">Books</a></li>
        <li><a href="order.php">Orders</a></li>
		<li class="last"><a href="contact.php">Contact</a></li>
			<?php
					if(isset($_SESSION['status']) && $_SESSION['unm']=="admin")
					{
						echo'<li><a href="/College_project/logout.php">Logout</a></li>';
					}
					else
					{
						echo'<li><a href="/College_project/register.php">Register</a></li>';
					}
			?>
 
</ul>
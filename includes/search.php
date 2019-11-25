
<ul>
	<li>
     <?php
		if(isset($_SESSION['status']))
		{
			echo '<h2>Hello:'.$_SESSION['unm'].'</h2>';
		}
		else
		{
    	echo'<form action="login_process.php" method="post">
				<h2> LogIn</h2>
        			<font color="green">Username:</font><br />
        			<input type="text" name="user" placeholder="Enter Username"/><br /><br />
			
			        <font color="green">Password:</font><br />
    	    		<input type="password" name="pass" placeholder="Enter Password"/><br />
			        <input type="submit" value="Login" class="x" />
        	</form>';
		}
		?>
    </li>
    
    
    <li class="search">
    <h2>Search</h2>
    <form action="search_result.php" method="get">
   
    <input type="text" name="s" class="s" placeholder="Search"/>
    <input type="submit" value="Search" class="x"/>
   
    </form>
    </li>
    
    <li>
    <h2>Categories</h2>
    <ul>
					
		<?php /*?>			<li><a href="#">Economics</a></li>
					<li><a href="#">Fiction</a></li>
					<li><a href="#">Forestry & WildLife</a></li>
					<li><a href="#">Health & Physics</a></li>
					<li><a href="#">Historical</a></li>
					<li><a href="#">Social</a></li>
					<li><a href="#">Sports & Physical Education</a></li>
					<li><a href="#">Terrorism</a></li>
					<li><a href="#">Tourism</a></li>
					<li><a href="#">Tracking </a></li>
					<li><a href="#">Yoga</a></li>
                  <?php */?>  
                    
                    <?php
						$link=mysql_connect("localhost","root","")or die("Can't Connect...");
				
						mysql_select_db("book",$link) or die("Can't Connect to Database...");
						$q="select * from category";
						$res=mysql_query($q,$link);
						
						while($row=mysql_fetch_assoc($res))
						{
							echo '<li class="cat"><a href="subcat.php?cat='.$row['id'].'&catnm='.$row['cat_name'].'">'.$row['cat_name'].'</a></li>';
						}
						
						mysql_close($link);
						?>
       </ul>
   </li>
</ul>
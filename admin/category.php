<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="default.css" type="text/css" rel="stylesheet">
</head>

<body>
	<div>
		<?php	include("includes/menu.php");	?>
	<div>
    
    <div class="logo">
    <?php	include("includes/logo.php");	?>
    </div>
    
    <div class="page">
    	<div class="content">
        	
            <form action="addcategory.php" method="post">
            	<b>ADD CATEGORY</b></br>
            	</br><input type="text" name="cat" size="30">
                	<input type="submit" value="Add" name="add">
           </form>
           <hr>
           
           <form action="addsubcat.php" method="post">
           	<b>ADD SUB-CATEGORY</b>
            </br><br>
            <u>PARENT CATEGORY</u>
            <br>
            	<select style="width:170px;" name="parent">
                <?php
					$link=mysql_connect("localhost","root","") or die("Can't Connect....");
					mysql_select_db("book",$link) or die("Can't Connect to Database....");
					
					$query="select * from category";
					
					$res=mysql_query($query,$link);
					
					while($row=mysql_fetch_assoc($res))
					{
						echo '<option value="'.$row['id'].'">'.$row['cat_name'];
					}
					mysql_close($link);
				?>
                </select>
                </br></br>
                <u>ADD SUB-CATEGORY</u>
                <br>
            <input type="text" name="subcat" size="30">
            <input type="submit" value="Add" name="subadd">
            <br>
</form>
            <hr>
            
            <form action="delcategory.php" method="post">
            <b>DELETE CATEGORY</b>
            <br><br>
            	<select style="width:170px;" name="del">
                	<?php
						$link=mysql_connect("localhost","root","") or die("Can't Connect....");
						mysql_select_db("book",$link) or die("Can't Connect to Database....");
					
						$query="select * from category";
						$res=mysql_query($query,$link);
						
						while($row=mysql_fetch_assoc($res))
						{
							echo '<option>'.$row['cat_name'];
						}
						mysql_close($link);
					?>
              </select>
               <input type="submit" value="Delete" name="delete">
               <br>
</form>
               <hr>
               
               <form action="delsubcat.php" method="post">
               <b>DELETE SUB-CATEGORY</b>
               <br><br>
               <select style="width:170px;" name="delsubcat">
               <?php
			   		$link=mysql_connect("localhost","root","") or die("Can't Connect....");
						mysql_select_db("book",$link) or die("Can't Connect to Database....");
					
						$query="select * from category";
						$res=mysql_query($query,$link);
						
						while($row=mysql_fetch_assoc($res))
						{
							echo "<option>".$row['cat_name'];
							
							$qq="select * from subcat where parent_id=".$row['id'];
							
							$ress=mysql_query($qq,$link) or die("wrong delete subcategory query");
							while($roww=mysql_fetch_assoc($ress))
							{
								echo '<option value="'.$roww['subcat_id'].'">--->'.$roww['subcat_name'];
							}
						}
						mysql_close($link);
			   ?>
               </select>
               
               <input type="submit" value="Delete">
               </form>
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
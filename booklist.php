<?php
session_start();
$link=mysql_connect("localhost","root","")or die("can't connect...");
mysql_select_db("book")or die("can't connect...");
$cat=$_GET['subcatid'];
$totalq="select count(*)\"total\"from books where subcat='$cat'";
$totalres=mysql_query($totalq,$link)or die("can't execute query");
$totalrow=mysql_fetch_assoc($totalres);
$page_per_page=6;
$page_total_rec=$totalrow['total'];
$page_total_page=ceil($page_total_rec/$page_per_page);
	if(!isset($_GET['page']))
	{
		$page_current_page=1;
	}
	else
	{
		$page_current_page=$_GET['page'];
	}
	?>
    <html>
    <head><title>Bookshop</title>
        <link href="menu.css" rel="stylesheet" type="text/css">
    </head>

    <body>
    <div>
		<?php include("includes/menu.php");?>
	</div>

	<div class="logo">
		<?php include("includes/logo.php");?>
	</div>

    <div class="page">
     <div class="sidebar">
        	<?php include("includes/search.php");?>
      </div>
     
    <div class="content">
	    
    <div class="post">
    <h1><?php echo $_GET['subcatnm'];?></h1>

    <table border="1"width="50%">
    
    <?php
	$k=($page_current_page-1)*$page_per_page;
	$link=mysql_connect("localhost","root","")or die("can't connect...");
mysql_select_db("book")or die("can't connect...");

	$query="select * from books where subcat='$cat' LIMIT ".$k .",".$page_per_page;
	$res=mysql_query($query,$link) or die("Can't Execute Query...");
	$count=0;
	while($row=mysql_fetch_assoc($res))
	{
	if($count==0)
	{
	echo '<tr>';
	}	
	echo'<td valign="top" width="20%" align="center">
	<a href="detail.php?id='.$row['id'].'&cat='.$_GET['subcatnm'].'">
	<img src="'.$row['img'].'" width="80" height="100">
														<br>'.$row['name'].'</a>
													</td>';
		$count++;							
		if($count==2)
		{
		echo '</tr>';
		$count=0;
		}
		}
		?>
        </table>
        <?php
		if($page_total_page>$page_current_page)
		{
		echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page+1).'">Next</a>';
		}
		for($i=1;$i<=$page_total_page;$i++)
		{
		echo '&nbsp;&nbsp;<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
		}
		if($page_current_page>1)
		{	
		echo '<a href="booklist.php?subcatid='.$_GET['subcatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($page_current_page-1).'">Previous</a>';
		}
		?>
		</div>
		</div>
		</div>
            <div style="clear:both";>
    </div>
    
    <br>
 <div class="footer">
 	<?php include("includes/footer.php");?>
    </div>

        </body>
        </html>
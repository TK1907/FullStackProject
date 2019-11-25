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

<div class="logo-wrap">
	<div class="logo">
		<?php include("includes/logo.php");?>
	</div>
</div>

<div class="page">
	<div class="content">
		<div class="post">
			<h1>Welcome
				<?php 
					if(isset($_SESSION['status']))
						echo $_SESSION['unm'];
					else 
						echo 'to BookShop';
				?>
			</h1>
            <p>
BookShop.com is one of the leading online bookstore in India. It has a wealth of books with considerable strengths in various fields such as 
Economics, Fiction, Forestry &Wildlife, Health & Physics, Historical, Social, Sports & Physical Education, Tourism, Terrorism, Tracking and Yoga.
<b><font size="+1" color="#336600">You name a subject we have a book... any subject.</font></b> It aims to be the book store of choice for each person.
We have also the facility of downloading various e-books which is more beneficial.
			</p>
            
            <p>
            BookShop.com offers free shipping on all books, anywhere in India. The online bookshop focuses on students, higher education,
            professional as well as competitive exam segments, an area normally ignored by most multi-brand online shops. It also highlights the
            latest launches and special bargain offers on books. Bookshop has a dedicated Customer Service Desk to take care of queries and to 
            assist customers in ordering. Users can pay on delivery via cash or cheque.
            </p>
            <h4>Architecture Books</h4>
<p>Architecture books defines and explains structure, function, history, and meaning. Architecture is examined as a cultural phenomenon as well as an artistic and technological achievement.These books covers  concise, historical outline giving the social and cultural background.</p>            
            <h4>Economic Books</h4>
<p>Our free economic books for students will help you understand the principles of economics. Read up on for instance microeconomics, macroeconomics and contemporary economics.</p>

<h4>Fiction Books</h4>
<p>Fiction books are those whose content or information is not factual. It is imaginary in the way that it has been invented by the author. It may refer to literary work, theatrical, musical and cinematic work.Bookshop.com provides wide variety of fiction books at affodable prices.</p>

<h4>Forestry & Wildlife Books</h4>
<p>These books cover the management of forest and describe the details about the wildlife of animals. It also covers the details about the forest trees and their various pros and cons to humans. Bookshop.com provides a variety of forestry & wildlife books.</p>

<h4>Health & Physics Books</h4>
<p>Health & Physics books are also available here. These books are helpful for students in health and medical physics and could be used as a study guide for various health related issues.</p>

<h4>Historical Books</h4>
<p>Books explaining the various facts about history. It covers all details about the particular event that had happened in the past. It depicts cultures of different countries and helps to gain knowledge about different religion as well. </p>

<h4>Sports & Physical Education Books</h4>
<p>These kinds of books Presents the academic expertise and teaching experience of many different contributors in a clear and accessible format. Highlights learning objectives and defines key terms throughout. Summary boxes consolidate learning and recap main topics. Quotes, examples, activities and questions capture and maintain student learning.</p>

<h4>Terrorism Books</h4>
<p>These books mainly describe the history of terrorism, root causes for increasing terrorism, its consequences of terrorism, understanding the terror networks and the necessary action against it.</p>

<h4>Tourism Books</h4>
<p>The books offering details about the travelling .It consists of details about the different places to visit. These books are helpful for tourists.</p>

<h4>Tracking Books</h4>
<p>These books "teach you" how to track.  It is exclusively written in a format that is conducive to learning and engages experimentation with provided exercises".</p>

<h4>Yoga Books</h4>
<p>These books offering the technique of the practice of the yoga system, which goes into details of the psychological reprecussions and involvements during the attempt to concentrate the mind with a single attention. Provides the reader with the right orientation to the abtruse subject of yoga.</p>
		</div>
	</div>

<div class="sidebar">
<?php
	include("includes/search.php");
?>
</div>
<div style="clear:both";></div>
</div>

<div class="footer">
<?php include("includes/footer.php");?>
</div>
</body>
</html>
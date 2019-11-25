<?php session_start();?>
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
<div class="content">
<div class="post">
<h1>Welcome To Registration.</h1>
<div class="table">
	<br /><br />
<table >
    <form name="f" action="register_process.php" method="post">
        <tr>
        	<td><b>Full Name:</b></td>
            	<td><input type="text" name="fname" size="30" maxlength="30"/></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
      <tr>
        	<td><b>Username:</b></td>
            	<td><input type="text" name="unm" size="30" maxlength="30"></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
      <tr>
        	<td><b>Password:</b></td>
            	<td><input type="password" name="pass" size="30"></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
      <tr>
        	<td><b>Confirm Password:</b></td>
            	<td><input type="password" name="cpass" size="30"></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
				<td><b>Gender:</b>&nbsp;&nbsp;</td>
				<td><input type="radio"  value="Male" name="gender" id='m'><label> Male</label>&nbsp;&nbsp;&nbsp;
					<input type="radio" value="Female" name="gender" id='f'><label>Female</label></td>
				<td>&nbsp;</td>
		</tr>
        <tr><td>&nbsp;</td></tr>
      <tr>
        	<td><b>E-mail Address:</b></td>
            	<td><input type="text" name="email" size="30"></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
      <tr>
        	<td><b>Contact No.:</b></td>
            	<td><input type="text" name="contact" size="30"></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
      <tr>
        	<td><b>City:</b></td>
            	<td><input type="text" name="city" size="30"></td>
        </tr>
        <tr><td>&nbsp;</td></tr>    
      <tr><td align="center"><input type="submit" value="Submit" name="submit"></td>
      <td align="center"><input type="reset" value="Cancel"></td></tr>
    
    </form>
    </table>

</div></div>    </div>
<div class="sidebar">
<?php
include("includes/search.php");
?>
</div>
</div>

<div style="clear:both";></div>
</div>

<div class="footer">
<?php include("includes/footer.php");?>
</div>

</body>
</html>
<html>
<body>
<form action="" method="post">
<input type="radio" name="useropt" value=a /> row[2] <br>
				  
<input type="radio" name="useropt" value=b /> $row[3] <br>
				  

<input type="radio" name="useropt" value=c /> $row[4] <br>
				 
<input type="radio" name="useropt" value=d /> $row[5] <br>
<input type="submit" name="sub">
</form>
</body>
<?php
if(isset($_POST["sub"]))
{
	if(isset($_POST["useropt"]))
		echo $_POST["useropt"];
	else
		echo "NULL";
}
?>
	
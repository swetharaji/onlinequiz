<!DOCTYPE html
	public:"-//w3c/DTD xhtml 1.0 frameset//en"
	"http://www.w3.org/tr/xhtml1/DTD/xhtml-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link rel="stylesheet" type="text/css" href="iloginStyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
div#i1{
	position : relative;
	top :20px;
	left: 30%;
	width : 50%;
}
div#i2
{
	width : 30%;
	position : absolute;
	top : 5%;
	left : 30px;
	height :50%;
}
</style>
</head>
<body>
<!-- Search box Start -->
<form action="afterviewreport.php" method="post">
<div id="center">
<center>       
		<select style="width:100%;color:gray;" name="ename">
			<option>-----------------Select-------------------</option>
			<?php
				
				include_once("connection.php");
				$inst=$_COOKIE["inst"];
				$sname=$_COOKIE["sname"];
				$query="SELECT * FROM examdetails WHERE iname='$inst'";
//				echo $query;
				$res=mysql_query($query);
				while($row=mysql_fetch_array($res))
				{
					echo "<option value=$row[1]>$row[1]</option>";
				}
			?>
		</select><br><br>
		<input type="submit" value="View Report" class="btn">
</center>
</div>
</form>
	<div id="i2">
		<img src="stude.jpg" width="70%">
	</div>

<!-- Search box End -->
</body>
</html>
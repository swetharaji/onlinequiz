<!doctype html>
<head>
	<title>Manage Student Details</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link rel="stylesheet" type="text/css" href="iloginStyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
div#i1
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
<form action="" method="post">
<div class="form-item" id="center">
		<table class="table table-hover" style="border-color:#ebebe0" border="1" cellspacing="5px">
		<thead>
			<tr class="active">
				<th><center><h4>Manage Student Details</h4></center></th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td><input type="text" required class="form-control" id="sid" name="sid" placeholder="Enter Student id">
		</td>
		</tr>
		<tr>
			<td><input type="text" required class="form-control" id="spwd" name="spwd" placeholder="Enter Student Name">
		</td>
		</tr>
		<tr>
			<td><input type="text" required class="form-control" id="batch" name="batch" placeholder="Enter Batch">
		</td>
		</tr>
		<tr>
			<td><input type="submit" class="btn" name="add" value="Add"></td>
		</tr>
		<tr>
			<td><input type="submit" class="btn" name="delete" value="Delete"></td>
		</tr>
		</tbody>
		</table>
	</div>
	<div id="i1">
		<img src="stude.jpg" width="70%">
	</div>
	<?php
		include_once("connection.php");
		if(isset($_POST["add"]))
		{
			$lname=$_COOKIE["lname"];
			$bid=$_POST["batch"];
			$sid=$_POST["sid"];
			$spwd=$_POST["spwd"];
			$query="SELECT * FROM ".$lname."slist where sid='".$sid."'";
			//echo $query;
			$result=mysql_query($query);
			$flag=0;
			while ($row = mysql_fetch_array($result))
			{
				$flag=1;
				echo "<script>alert('Student Name exist..');
						  window.location.href='enterStudent.php';
				  </script>";
			}
			if($flag==0){
			$query="INSERT INTO ".$lname."slist VALUES ('".$sid."','".$spwd."','".$bid."')";
			if(!mysql_query($query,$con))
				die("Error");
			else
				echo "<script>alert('Inserted');</script>";
			}
		}
		if(isset($_POST["delete"]))
		{
			$lname=$_COOKIE["lname"];
			$bid=$_POST["batch"];
			$sid=$_POST["sid"];
			$spwd=$_POST["spwd"];
			$query="SELECT * FROM ".$lname."slist where sid='".$sid."'";
			//echo $query;
			$result=mysql_query($query);
			$flag=0;
			while ($row = mysql_fetch_array($result)){
				$flag=1;
			}
			if($flag==1){
				$query="DELETE FROM ".$lname."slist where sid='".$sid."'";
				echo $query;
				$result=mysql_query($query);
				if($result){
					echo "<script>alert('Deleted Successfully');</script>";
				}
			}
			else
				echo "<script>alert('No such student id exist...')</script>";
		}
		?>
</body>
</html>
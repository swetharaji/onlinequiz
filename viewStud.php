<!doctype html>
<head>
	<title>Institution Login Form</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link rel="stylesheet" type="text/css" href="iloginStyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<form action="afterviewstud.php"  name="signup" method="POST">
<div class="form-item" id="center">
		<table class="table table-hover" style="border-color:#ebebe0" border="1" cellspacing="5px">
		<thead>
			<tr class="active">
				<th><center><h4>View Student</h4></center></th>
			</tr>
		</thead>
		<tbody>
		<tr>
		<td>
		<select style="width:100%;color:gray;" name="sid">
			<option>-----------------Select Student-------------------</option>
			<?php
				
				include_once("connection.php");
				$inst=$_COOKIE["inst"];
				$sname=$_COOKIE["sname"];
				$tbl=$inst."slist";
				$query="SELECT * FROM $tbl ";
			//	echo $query;
				$res=mysql_query($query);
				while($row=mysql_fetch_array($res))
				{
					$query1="SELECT * FROM $tbl WHERE sid='".$row[0]."'";
					$result=mysql_query($query1);
					$row1=mysql_fetch_array($result);
					echo "<option value=$row[0]>$row[0] - $row1[1]</option>";
				}
			?>
		</select>
		<!--tr>
			<td><input required type="text" class="form-control" id="iname" placeholder="Enter Institution Id" data-error="Please provide valid name">
		</td-->
		</td>
		</tr>
		<tr>
		<td>
		<select style="width:100%;color:gray;" name="ename">
			<option>-----------------Select Exam-------------------</option>
			<?php
				
				include_once("connection.php");
				$inst=$_COOKIE["inst"];
				$sname=$_COOKIE["sname"];
				$query="SELECT * FROM examdetails WHERE iname='$inst'";
				//echo $query;
				$res=mysql_query($query);
				while($row=mysql_fetch_array($res))
				{
					echo "<option value=$row[1]>$row[1]</option>";
				}
			?>
		</select>
		</td>
		</tr>
		<tr>
			<td><input type="submit" name="sub" class="btn" value="View"></td>
		</tr>
		<tr>
			<td><input type="reset" class="btn" value="Clear"></td>
		</tr>
		</tbody>
		</table>
	</div>
</form>

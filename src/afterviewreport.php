<html>
<head>
<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link rel="stylesheet" type="text/css" href="iloginStyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<?php
	include_once("connection.php");
	$ename=$_POST["ename"];
	$lname=$_COOKIE["inst"];
	$tbl=$lname."_".$ename."_marktable";
	$sid=$_COOKIE["sname"];
	$sname=$_COOKIE["sid"];
	$query="SELECT * FROM $tbl WHERE sid='".$sid."' AND sname='".$sname."'";
	$res=mysql_query($query);
	if(!$res)
		echo "<script>alert('Still you haven't attended the test');
					  window.href.location='viewReport.php';
					</script>";
	while($row=mysql_fetch_array($res))
	{
		echo "<div class='container'>
			  <div class='jumbotron'>
			<div class='form-item'>
				<table class='table table-hover' style='border-color:#ebebe0' border='1' cellspacing='5px'>
				<tbody>
					<tr class='danger'> 
						<td>Student Name</td>
						<td>$row[1]</td>
					</tr>
					<tr class='warning'>
						<td>Student Id</td>
						<td>$row[0]</td>
					</tr>
					<tr class='danger'>
						<td>Answered</td>
						<td>$row[2]</td>
					</tr>
					<tr class='warning'>
						<td>Un answered</td>
						<td>$row[3]</td>
					</tr>
					<tr class='active'>
						<td>Total Marks </td> 
						<td style='color : red;font-variant : bold'>$row[4]</td>
					</tr>
				</tbody>
				</table>
			</div>
			</div>
			</div>";
	}
?>
</body>
</html>
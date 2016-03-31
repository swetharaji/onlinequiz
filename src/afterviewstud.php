<html>
<head>
<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link rel="stylesheet" type="text/css" href="iloginStyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<?php
include_once("connection.php");
if(isset($_POST["sub"])){
	//echo "<script>alert('hai');</script>";
	$lname=$_COOKIE["inst"];
	$sid=$_POST["sid"];
	$ename=$_POST["ename"];
	$tblname=$lname."_".$ename."_marktable";
	$query="SELECT * FROM $tblname WHERE sid='".$sid."'";
	//echo $query;
	$res=mysql_query($query);
	$no=mysql_num_rows($res);
	//echo "haaaaa$no";
	if($no==0){
		echo "<script>alert('The student have not attended the test');
				window.location.href='viewStud.php';
			</script>";
	}
	else{
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
	}}
}
?>
</body>
</html>
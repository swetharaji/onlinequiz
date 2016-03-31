<!doctype html>
<head>
	<title>Question Details Form</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link rel="stylesheet" type="text/css" href="iloginStyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script type="text/javascript">
	function xy1()
{
   //alert("hello");
    var x = document.forms["myform"]["qname"].value;
	//alert(x);
	if(!isNaN(x))
	{
	alert("invalid question name");
	return false;
	}
	return true;
}

		function xy6()
{
	var x5 = document.forms["myform"]["ans"].value;
	//alert(x5);
	if(!isNaN(x5))
	{
	alert("invalid answer");
	return false;
	}
	return true;
	}
	
	
	</script>
</head>
<body>
<?php
//	$ename=$_POST["ename"];
//	echo "<input type='hidden' name='ename' value=$ename>";

?><form name="myform" method="POST" action="quesdet.php">
	<div class="form-item" id="center">
		<table class="table table-hover">
		<thead>
			<tr class="active">
				<th><center><h4>Question Details Form</h4></center></th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td><input type="text" required class="form-control" id="qname" name="qname" onblur="return xy1();" placeholder="Enter Question">
		</td>
		</tr>
		<tr>
			<td><input type="text" required class="form-control" id="opta"  name="opta" placeholder="Enter Option A">
		</td>
		</tr>
		<tr>
			<td><input type="text" required class="form-control" id="optb"  name="optb" placeholder="Enter Option B">
		</td>
		</tr>
		<tr>
			<td><input type="text" required class="form-control" id="optc" name="optc" placeholder="Enter Option C">
		</td>
		</tr>
		<tr>
			<td><input type="text" required class="form-control" id="optd" name="optd" placeholder="Enter Option D">
		</td>
		</tr>
		<tr>
			<td><input type="text" required class="form-control" id="ans" name="ans" onblur="return xy6();" placeholder="Enter Answer">
		</td>
		</tr>
		<tr>
			<td><input type="submit" class="btn" name="submit" value="Submit"></td>
		</tr>
		<tr>
			<td><input type="reset" class="btn" value="Clear"></td>
		</tr>
		</tbody>
		</table>
	</div>
</form>
<body>
<html>
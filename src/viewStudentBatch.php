<!doctype html>
<head>
	<title>Institution Login Form</title>
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
<form action="" name="view">
	<div class="form-item" id="center">
		<table class="table table-hover" style="border-color:#ebebe0" border="1" cellspacing="5px">
		<thead>
			<tr class="active">
				<th><center><h4>View Student Details</h4></center></th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td><input type="text" class="form-control" name="sid" placeholder="Enter Student Batch" onblur="return isValid();">
		</td>
		</tr>
		<tr>
			<td><input type="submit" class="btn" value="View"></td>
		</tr>
		<tr>
			<td><input type="reset" class="btn" value="Clear"></td>
		</tr>
		</tbody>
		</table>
	</div>
</form>
<div id="i1">
		<img src="stude.jpg" width="70%">
	</div>
<script>
function isValid()
{
	var batch=document.view.sid.value;
	var exp=new RegExp("^\\d\\d\\d\\d-\\d\\d\\d\\d$");
	if(!exp.test(batch))
	{
		alert("Invalid batch name");
		return false;
	}
	return true;
}
</script>
<body>
<html>
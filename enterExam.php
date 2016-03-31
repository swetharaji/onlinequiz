<!doctype html>
<head>
	<title>Exam Details Form</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link rel="stylesheet" type="text/css" href="iloginStyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script type="text/javascript">
function xy1()
{
   //alert("hello");
    var x = document.forms["myform"]["exname"].value;
	//alert(x);
	if(!isNaN(x))
	{
	alert("invalid exam name");
	return false;
	}
	return true;
	}
	
function xy2()
{	
	var x1 = document.forms["myform"]["tlim"].value;
	//alert(x1);
	if(isNaN(x1))
	{
	alert("invalid time limit");
	}}
	function xy3()
{
	var x2 = document.forms["myform"]["noq"].value;
	//alert(x2);
	if(isNaN(x2))
	{
	alert("invalid number of question");
	}}
	function xy4()
{
	var x3 = document.forms["myform"]["passmark"].value;
	//alert(x3);
	if(isNaN(x3))
	{
	alert("invalid pass mark");
	}}
	function xy5()
{
	var x4 = document.forms["myform"]["posmark"].value;
	//alert(x4);
	if(isNaN(x4))
	{
	alert("invalid positive mark");
	}}
	function xy6()
{
	var x5 = document.forms["myform"]["negmark"].value;
	//alert(x5);
	if(isNaN(x5))
	{
	alert("invalid negative mark");
	}}
	
	
	</script>
</head>
<body>
<form action="examdet.php" method="POST" >
<div class="form-item" id="center">
	 
		<table class="table table-hover">
		<thead>
			<tr class="active">
				<th><center><h4>Exam Details Form</h4></center></th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td><input type="text" required data-error="Please provide valid examname" class="form-control" id="exname" name="exname" onblur="return xy1()" placeholder="Enter Exam Name"/>
		</td>
		</tr>
		<tr>
			<td><input type="text" required class="form-control" id="tlim" onblur="return xy2()" name="tlim" placeholder="Enter Time Limit"/>
		</td>
		</tr>
		<tr>
			<td><input type="text" required class="form-control" id="noq" name="noq" onblur="return xy3()" placeholder="Enter Number of Questions"/>
		</td>
		</tr>
		<tr>
			<td><input type="text" required class="form-control" id="passmark" name="passmark" onblur="return xy4()" placeholder="Enter Pass Mark"/>
		</td>
		</tr>
		<tr>
			<td><input type="text" required class="form-control" id="posmark" name="posmark" onblur="return xy5()" placeholder="Enter Positive Marks"/>
		</td>
		</tr>
		<tr>
			<td><input type="text" required class="form-control" id="negmark" name="negmark" onblur="return xy6()" placeholder="Enter Negative Marks"/>
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

 </body>
 </html>
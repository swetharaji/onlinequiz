<!doctype html>
<head>
	<title>Institution Signup Form</title>
	<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link rel="stylesheet" type="text/css" href="iloginStyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<hr>
	
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Crack The Exam</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="instMain.php">Institute</a></li>
       <li><a href="stuMain.php">Student</a></li>  
    </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="isignup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login
        <span class="caret"></span></a>
         <ul class="dropdown-menu">
          <li><a href="slogin.php">Student</a></li>
          <li><a href="ilogin.php">Institute</a></li>
         </ul>
      </li>
    </ul>
	
  </div>
</nav>
<form action="" data-toggle="validator" name="signup" method="POST">
<div class="form-item" id="center">
		<table class="table table-hover" style="border-color:#ebebe0" border="1" cellspacing="5px">
		<thead>
			<tr class="active">
				<th><center><h4>Enter Institution  Details</h4></center></th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td><input required type="text" class="form-control" id="lgname" name="lgname" placeholder="Enter Login name" data-error="Please provide valid name">
		</td>
		</tr>
		<tr>
			<td><input required type="text" class="form-control" id="iname" name="iname" placeholder="Enter Institution Name" data-error="Please provide valid name">
		</td>
		</tr>
		<tr>
			<td><input class="form-control" required type="email" name="email" data-error="Please provide your Email ID" placeholder="Enter Email ID">
		</td>
		</tr>
		<tr>
			<td><input class="form-control" type="password" required data-error="Please provide your Password" name="pwd" placeholder="Password">
		</td>
		</tr>
		<tr>
			<td>  <input class="form-control" type="password" required data-error="Please provide your Password" name="cpwd" onblur="return pwdcheck();" placeholder="Enter Confirm Password">
		</td>
		</tr>
		<tr>
			<td><input type="submit" name="sub" class="btn" value="Sign in"></td>
		</tr>
		<tr>
			<td><input type="reset" class="btn" value="Clear"></td>
		</tr>
		</tbody>
		</table>
	</div>
</form>
<?php
if(isset($_POST["sub"])){
	include_once("connection.php");
	$lname=$_POST["lgname"];
	$iname=$_POST["iname"];
	$email=$_POST["email"];
	$pwd=$_POST["pwd"];
	$query="SELECT * FROM org_details where loginname='".$lname."'";
	//echo $query;
	$result=mysql_query($query);
	$flag=0;
	while ($row = mysql_fetch_array($result))
	{
		$flag=1;
		echo "<script>alert('Login name has already been taken..');
						  window.location.href='isignup.php';
				  </script>";
	}
	if($flag==0){
	$query="INSERT INTO org_details (loginname,iname,email,password) VALUES ('".$lname."','".$iname."','".$email."','".$pwd."')";
	//echo $query;
	if(!mysql_query($query,$con))
		die("Error");
	$s1=$lname."edetails";
	$s2=$lname."qtable";
	$s3=$lname."slist";
	$query="CREATE TABLE $s1 (ID int,Ename text,Tlimit text,Passmarks int,NoQues int)";
	//echo $query;
	if(!mysql_query($query,$con))
		die("Error");
	
	$query="CREATE TABLE $s3 (SID text,Sname text,batch text)";
	//echo $query;
	if(!mysql_query($query,$con))
		die("Error");
	$query="SELECT * FROM org_details WHERE loginname='".$lname."'";
	//echo $query;
	$result=mysql_query($query);
	while ($row = mysql_fetch_array($result))
	{
		setcookie("lname",$row[0],time()+86400,"/");
		echo "<script>window.location.href='instframes.php';
				  </script>";
	}}
}
?>
<script>
function pwdcheck(){
	var pwd=document.signup.pwd.value;
	var cpwd=document.signup.cpwd.value;
	if(cpwd != pwd){
		window.alert("Password and Confirm Password should be same");
		return false;
	}
	return true;
}
</script>
</body>
</html>
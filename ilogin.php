<!doctype html>
<head>
	<title>Institution Login Form</title>
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
<form action="" method="POST">
	<div class="form-item" id="center">
		<table class="table table-hover" style="border-color:#ebebe0" border="1" cellspacing="5px">
		<thead>
			<tr class="active">
				<th><center><h4>Institution Login Form</h4></center></th>
			</tr>
		</thead>
		<tbody>
		<tr>
			<td><input required type="text" data-error="Please provide valid name" class="form-control" id="lgname" name="lgname" placeholder="Enter Login Name">
		</td>
		</tr>
		<tr>
			<td><input required type="password" data-error="Please provide valid password" class="form-control" name="pwd" id="pwd" placeholder="Enter password">
		</td>
		</tr>
		<tr>
			<td><input type="submit" class="btn" name="submit" value="Login"></td>
		</tr>
		<tr>
			<td><input type="reset" class="btn" value="Clear"></td>
		</tr>
		</tbody>
		</table>
	</div>
</form>
<?php
	include_once("connection.php");
	if(isset($_POST["submit"])){
		$lname=$_POST["lgname"];
		$pwd=$_POST["pwd"];
		$query="SELECT * FROM org_details WHERE loginname='".$lname."'";
		//echo $query;
		$res=mysql_query($query);
		$flag=1;
		while ($row = mysql_fetch_array($res))
		{
			$flag=0;				
			if($pwd == $row[3]){
				setcookie("lname",$lname,time()+86400,"/");
				echo "<script>window.location.href='instframes1.php';
			</script>";
			}
		}
		if($flag==0){
			echo "<script>alert('Incorrect username or password');
						  window.location.href='ilogin.php';
					  </script>";
		}
		if($flag==1)
			echo "<script>alert('Not registered yet');
					</script>";
	}?>
<body>
<html>
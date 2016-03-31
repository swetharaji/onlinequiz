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

<form action="" method="post">
	<div class="form-item" id="center">
		<table class="table table-hover" style="border-color:#ebebe0" border="1" cellspacing="5px">
		<thead>
			<tr class="active">
				<th><center><h4>Student Login Form</h4></center></th>
			</tr>
		</thead>
		<tbody>
		
		<tr>
			<td><input required type="text" data-error="Please Enter valid name" class="form-control" id="spwd" name="spwd" placeholder="Enter Student Name">
		</td>
		</tr>
		<tr>
			<td><input required type="password" data-error="Please provide password" class="form-control" id="sid" name="sid" placeholder="Enter Student id">
		</td>
		</tr>
		<tr>
			<td><select name="iname" style="width : 100%;height:20%;color:gray;">
					<option>------------------Select Institution-----------------</center></option>
					<?php
						include_once("connection.php");
						$query="SELECT * FROM org_details";
						$res=mysql_query($query);
						while($row = mysql_fetch_array($res))
						{
							echo "<option value='$row[0]'>$row[0]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" class="btn" name="submit" value="Sign in"></td>
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
	if(isset($_POST["submit"]))
	{
		$sid=$_POST["sid"];
		$pwd=$_POST["spwd"];
		$inst=$_POST["iname"];
		$query="SELECT * FROM ".$inst."slist WHERE sid='$sid'";
		echo $query;
		$res=mysql_query($query);
		$flag=1;
		while($row=mysql_fetch_array($res))
		{
			echo $row[1];
			$flag=0;
			if($pwd ==$row[1]){
				setcookie("sname",$sid,time()+86400,"/");
				setcookie("inst",$inst,time()+86400,"/");
				setcookie("sid",$pwd,time()+86400,"/");
				echo "<script>window.location.href='studframes.php'</script>";
			}
		}
		if($flag==0){
			echo "<script>alert('Incorrect Password')</script>";
		}
		if($flag==1)
		{
			echo "<script>alert('Not registered yet..')</script>";
		}
	}
?>
<body>
<html>
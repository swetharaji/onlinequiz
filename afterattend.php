<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crack The Test | HOME</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link rel="stylesheet" type="text/css" href="iloginStyle.css">
<style>
#i1{
	font-family: monotype corsiva;
	font-size : 20px;
	width : 90%;
	
}

</style>
<script type="text/javascript">
// set minutes
<?php
		include_once("connection.php");
		$ename=$_POST["ename"];
		$lname=$_COOKIE["inst"];
		$query="SELECT * FROM ".$lname."edetails WHERE ename='".$ename."'";
		$res=mysql_query($query);
		while($row=mysql_fetch_array($res))
		{
			setcookie("value",$row[2],time()+86400,"/");
		}
?>
var mins=<?php echo $_COOKIE["value"]; ?>
 
// calculate the seconds 
var secs = mins * 60;
function countdown() {
	setTimeout('Decrement()',1000);
}
function Decrement() {
	if (document.getElementById) {
		minutes = document.getElementById("minutes");
		seconds = document.getElementById("seconds");
		// if less than a minute remaining
		if (seconds < 59) {
			seconds.value = secs;
		} else {
			minutes.value = getminutes();
			seconds.value = getseconds();
if(minutes.value==0)
{
if(seconds.value==0)
{
alert("time out");
window.location="afterFinish.php"
}}
		}
		secs--;
		setTimeout('Decrement()',1000);
	}
}
function getminutes() {
	// minutes is seconds divided by 60, rounded down
	mins = Math.floor(secs / 60);
	return mins;
}
function getseconds() {
	// take mins remaining (as seconds) away from total seconds remaining
	return secs-Math.round(mins *60);
}
</script>
</head>
<body>
<div class="container" style="left : 30px;position : fixed;top : 0;">
<div id="timer"> 
	<input id="minutes" type="text" style="width: 20px; border: none; background-color:none; font-size: 16px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<input id="seconds" type="text" style="width: 26px; border: none; background-color:none; font-size: 16px; font-weight: bold;">
</div>
</div>
<script>
countdown();
</script>
<?php
	include_once("connection.php");
	$inst=$_COOKIE["inst"];
	$sname=$_COOKIE["sname"];
	$ename=$_POST["ename"];
	$tblname=$inst.$ename."qtable";
	$query="SELECT * FROM $tblname";
	$result=mysql_query($query);
	$count=0;
	echo "<form action='afterfinish.php' method='post'>";
	while($row=mysql_fetch_array($result))
	{
		$count++;
		echo "<div class='container' id='i1'><div class='jumbotron' >
				$row[0] . $row[1] <br>
				<input type=radio name=useropt$count value=a /> $row[2] <br>
				  
				  <input type=radio name=useropt$count value=b /> $row[3] <br>
				  
				  <input type=radio name=useropt$count value=c /> $row[4] <br>
				 
				  <input type=radio name=useropt$count value=d /> $row[5] <br>
			  </div>
			 </div>";
	}
	echo "<center>
			<input type='hidden' name='ename' value=$ename>
			<input type='hidden' name='count' value=$count>
			<input type='submit' class='btn' style='width:30%;' name='finish' value='Finish Test'>
		</center>";

?>
</body>
<html>	
	 
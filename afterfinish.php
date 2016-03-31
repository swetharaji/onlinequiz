<html>
<head>
<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link rel="stylesheet" type="text/css" href="iloginStyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<?php
	include_once("connection.php");
	$count=$_POST["count"];
	$lname=$_COOKIE["inst"];
	$mark=0;
	$unans=0;
	$ans=0;
		$ename=$_POST["ename"];
		$sname=$_COOKIE["sid"];
		$sid=$_COOKIE["sname"];
		$tblname=$lname."_".$ename."_marktable";
		$query="INSERT INTO $tblname(sid,sname) values ('$sid','$sname')";
		//echo $query;
		if(!mysql_query($query))
			echo "error";
		for($i=1;$i<=$count;$i++)
		{
		if(isset($_POST["useropt$i"])){
			$ans++;
			$val=$_POST["useropt$i"];
		}
		else
		{
			$unans++;
			$val='0';
		}
		$query1="SELECT * FROM ".$lname.$ename."qtable WHERE qid=$i";
		$res=mysql_query($query1);
		$row=mysql_fetch_array($res);
//		echo "<br>$row[6]";
		if($row[6]==strtoupper($val))
			$mark++;
		$query="UPDATE $tblname SET q$i='$val' WHERE sid='".$sid."' AND sname='".$sname."'";
		//echo $query;
		mysql_query($query);
		}
		$query="UPDATE $tblname SET ans=$ans,unans=$unans,mark=$mark WHERE sid='".$sid."' AND sname='".$sname."'";
		mysql_query($query);
		echo "<input type='hidden' name='ans' value=$ans>
			  <input type='hidden' name='unans' value=$unans>
			  <input type='hidden' name='mark' value=$mark>";
		echo "<div class='container'>
			  <div class='jumbotron'>
			<div class='form-item'>
				<table class='table table-hover' style='border-color:#ebebe0' border='1' cellspacing='5px'>
				<tbody>
					<tr class='danger'> 
						<td>Student Name</td>
						<td>$sname</td>
					</tr>
					<tr class='warning'>
						<td>Student Id</td>
						<td>$sid</td>
					</tr>
					<tr class='active'>
						<td>Total questions</td>
						<td>$count</td>
					</tr>
					<tr class='danger'>
						<td>Answered</td>
						<td>$ans</td>
					</tr>
					<tr class='warning'>
						<td>Un answered</td>
						<td>$unans</td>
					</tr>
					<tr class='active'>
						<td>Total Marks </td> 
						<td style='color : red;font-variant : bold'>$mark</td>
					</tr>
				</tbody>
				</table>
			</div>
			</div>
			</div>";
?>
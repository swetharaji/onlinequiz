<!DOCTYPE html
	public:"-//w3c/DTD xhtml 1.0 frameset//en"
	"http://www.w3.org/tr/xhtml1/DTD/xhtml-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
		<link rel="stylesheet" type="text/css" href="formStyle.css">
	<link rel="stylesheet" type="text/css" href="iloginStyle.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	  <style>
	 div#center
{
	position:relative;
	top:100px;
	left:5%;
	width:90%;
}
th#id1
{
	width : 40%;
}
th#id2
{
	width :15%;
}
</style>
</head>
	<?php
	include_once("connection.php");
	if(isset($_POST["submit"])){
		$lname=$_COOKIE["lname"];
		$ename=$_POST["exname"];
		$tlimit=$_POST["tlim"];
		$noq=$_POST["noq"];
		setcookie("noq",$noq,time()+86400,"/");
		$pmark=$_POST["passmark"];
	//	$pos=$_POST["posmark"];
	//	$neg=$_POST["negmark"];
		$query="insert into ".$lname."edetails (Ename,Tlimit,Passmarks,NoQues) values('$ename','$tlimit',$noq,$pmark)";
		//echo $query;
		$res=mysql_query($query);
		if($res){
			$query="INSERT into examdetails values('$lname','$ename')";
			mysql_query($query);
			$s2=$lname.$ename."qtable";
			setcookie("table",$s2,time()+86400,"/");
			$query="CREATE TABLE $s2 (QID int,Question text,A text,B text,C text,D text,Answer text)";	
	//		echo $query;
		if(!mysql_query($query,$con))
		die("Error");
			echo "<script>alert('Exam details have successsfully inserted..');
						  alert('Now you can add questions');
					</script>";
			
				echo "<form action='' method='post'>
				<div class='form-item' id='center'><table class='table table-hover' style='border-color:#ebebe0' cellspacing='5px' cellpadding='5px'>
					<thead>
						<tr class='active'>
						<th id='id1'><center>Question</center></th>
						<th id='id2'><center>Option A</center></th>
						<th id='id2'><center>Option B</center></th>
						<th id='id2'><center>Option C</center></th>
						<th id='id2'><center>Option D</center></th>
						<th><center>Correct Answer</center></th>
						<tr>
					</thead>
					<tbody>";
				$tablename=$lname."_".$ename."_"."marktable";
		//		echo $tablename;
				$query1="CREATE TABLE $tablename(sid text,sname text,ans int,unans int,mark int)";
			//	echo $query1;
				mysql_query($query1);
				$query2="ALTER TABLE $tablename ";
				for($k=1;$k<=$noq;$k++){
					$query2=$query2."ADD q".($k)." text NOT NULL";
				//	echo $query2;
					if($k!=$noq){
					$query2=$query2.",";
					//echo $query2;
					}
				}
				if(!mysql_query($query2))
					die("error");
				for($i=0;$i<$noq;$i++){
					echo "<tr>
							<td><input required type='text' class='form-control' name='q$i' placeholder='Enter question'></td>
							<td><input required type='text' class='form-control' name='opt1$i' placeholder='Option 1'></td>
							<td><input required type='text' class='form-control' name='opt2$i' placeholder='Option 2'></td>
							<td><input required type='text' class='form-control' name='opt3$i' placeholder='Option 3'></td>
							<td><input required type='text' class='form-control' name='opt4$i' placeholder='Option 4'></td>
							<td><select name='cans$i' class='form-control'>
								<option value='A'>A</option>
								<option value='B'>B</option>
								<option value='C'>C</option>
								<option value='D'>D</option>
								</select>
							</td>
							
						</tr>";
				}
				echo "<tr>
					<td><input type='submit' class='btn' name='sub' value='OK'></td>
					</tr>";
				echo "</tbody>";
				echo "</table>";
				echo "</div>";
				echo "</form>";
				// window.location.href='enterExam.php';
		}
		else
			echo "<script>alert('Error in insertion');
						 </script>";
	}
	if(isset($_POST["sub"]))
				{	
					//echo "hai";
					$noq=$_COOKIE["noq"];
					$s2=$_COOKIE["table"];
					for($i=0;$i<$noq;$i++){
						$ques=$_POST["q$i"];
						$opt1=$_POST["opt1$i"];
						$opt2=$_POST["opt2$i"];
						$opt3=$_POST["opt3$i"];
						$opt4=$_POST["opt4$i"];
						$ans=$_POST["cans$i"];
						$id=$i+1;
						$query="INSERT into $s2 values($id,'$ques','$opt1','$opt2','$opt3','$opt4','$ans')";
					//	echo $query;
						$res=mysql_query($query);
						if(!$res){
							die("Error");
						}
					}	
				}
?>

</html>
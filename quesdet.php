<!DOCTYPE html
	public:"-//w3c/DTD xhtml 1.0 frameset//en"
	"http://www.w3.org/tr/xhtml1/DTD/xhtml-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	include_once("connection.php");
	if(isset($_POST["submit"])){
		//$ename=$_POST["ename"];
		$ques=$_POST["qname"];
		//$qno=$_POST["qno"];
		//$qno++;
		//$noq=$_POST["noq"];
		$a=$_POST["opta"];
		$b=$_POST["optb"];
		$c=$_POST["optc"];
		$d=$_POST["optd"];
		$answer=$_POST["ans"];
		$query="SELECT eid FROM exam WHERE ename='System Software'";
		$res=mysql_query($query);
		$eid="";
		while($row = mysql_fetch_array($res))
		{
			$eid=$row[0];
		}
		$query="insert into quesdetails values($eid,$ques,$a,$b,$c,$d,$answer)"; 
		$res=mysql_query($query);
		if($res)
			echo "<script>alert('Question added..');
						  window.location.href='enterQues.php';
				  </script>";
	}?>
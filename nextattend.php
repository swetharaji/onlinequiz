<?php
		include_once("connection.php");
		$ename=$_POST["ename"];
		//echo "<script>alert($ename);</script>";
		$lname=$_COOKIE["inst"];
		$query="SELECT * FROM ".$lname."edetails WHERE ename='".$ename."'";
		echo $query;
		$res=mysql_query($query);
		while($row=mysql_fetch_array($res))
		{
			echo $row[2];
			setcookie("value",$row[2],time()+86400,"/");
		}
?>
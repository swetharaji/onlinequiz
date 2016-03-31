<?php
	//error_reporting(E_ALL);
	$services = getenv("VCAP_SERVICES");
$services_json = json_decode($services,true);
$mysql_config = $services_json["cleardb"][0]["credentials"];
$dbname = $mysql_config["ad_a2f8aebe014771c"];
$servername = $mysql_config["us-cdbr-iron-east-03.cleardb.net"].':'.$mysql_config["3306"];
$username = $mysql_config["b5f878e8d84120"];
$password = $mysql_config["9d2236d4"];
	
	$con=mysql_connect($host,$dbuser,$password);
	
	if(!$con)
	{
	die('could not connect:'. mysql_error());
	}
	mysql_select_db($dbname,$con);
?>
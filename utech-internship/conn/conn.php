<?php

$servername = "localhost";
$db_name = 'intern';
$username = "root";
$password = "admin";
	
$handler = mysqli_connect($servername, $username, $password);
	if (!$handler){
		echo "<b>ERROR: </b>".mysql_connect_error();
	}else {
		echo " Connected! </br>Selecting db..</br>";
		mysqli_select_db($handler, $db_name);
		echo " Database selected! ";
	}


?>
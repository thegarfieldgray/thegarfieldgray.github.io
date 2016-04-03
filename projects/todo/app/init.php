<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname=sql3113470;host=sql3.freemysqlhosting.net','sql3113470','MU9lF6XthQ');

if(!isset($_SESSION['user_id'])){
	die('You are not signed in. ');
}
?>
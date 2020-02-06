<?php

function db_connect() {
   $dbhost = 'remotemysql.com';
	$dbname = 'q3LxuhkoY0';
	$dbuser = 'q3LxuhkoY0';
	$dbpass = 'Nyey8CJoR4';
	
	try {
		$dbh = new PDO('mysql:host=remotemysql.com;dbname=q3LxuhkoY0', $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "Error!: " . $e->getMessage() . "<br/>";
 		die();
 	}
	
	return $dbh;
}

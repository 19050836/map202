<?php

function db_connect() {
   $dbhost = 'salt.db.elephantsql.com';
	$dbname = 'kajjlvwo';
	$dbuser = 'kajjlvwo';
	$dbpass = 'UdMKO9g7lY-MtBeAJ13wuza6BV1ezPfc';
	
	try {
		$dbh = new PDO('pgsql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpass);
	} catch (PDOException $e) {
		echo "Error!: " . $e->getMessage() . "<br/>";
 		die();
 	}
	
	return $dbh;
}

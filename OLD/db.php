<?php
	
function db_connect() {
    try {
		
		$servername = "remotemysql.com";
		$username = "q3LxuhkoY0";
		$dbname =  "q3LxuhkoY0";
		$password = "Nyey8CJoR4";
		$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
		// set up DSN (Data Source Name)
		//$dsn = "mysql:host=$servername;dbname=$dbname";
        //$dbh = new PDO($dsn, $user_name, $password);
        return $dbh;
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
        exit;
    }
}



?>
<?php

function db_connect() {
   $dbhost = 'remotemysql.com';
	$dbname = 'fITQc3igMz';
	$dbuser = 'fITQc3igMz';
	$dbpass = 'sGL6qQqltz';
	
	try {
		$dsn = "mysql:host=$servername;dbname=$dbname";
        $dbh = new PDO($dsn, $username, $password);
	} catch (PDOException $e) {
		echo "Error!: " . $e->getMessage() . "<br/>";
 		die();
 	}
	
	return $dbh;
}

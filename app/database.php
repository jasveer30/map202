<?php

function db_connect() {
   	$dbhost = 'salt.db.elephantsql.com';
	$dbname = 'kmcicwgt';
	$dbuser = 'kmcicwgt';
	$dbpass = 'RjMvy441NEkE3DmaRSCtO_clkYUWHEnW';
	
	try {
		$dbh = new PDO('pgsql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpass);
	} catch (PDOException $e) 
	{
		echo "Error!: " . $e->getMessage() . "<br/>";
 		die();
 	}
	
	return $dbh;
}
?>
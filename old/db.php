<?php
	
function db_connect() {
    try {
		
		$servername = "remotemysql.com";
		$username = "fITQc3igMz";
		$dbname ="fITQc3igMz";
		$password = "sGL6qQqltz";
		// set up DSN (Data Source Name)
		$dsn = "mysql:host=$servername;dbname=$dbname";
        $dbh = new PDO($dsn, $username, $password);
        return $dbh;
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
        exit;
    }
}



?>
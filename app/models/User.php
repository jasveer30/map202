<?php

class User {

    public $user_name;
    public $password_value;
    public $auth = false;

    public function __construct() {
        
    }

	
	public function saveUser ($user_name, $password_value) {
		$database_instance = db_connect();
		
		
				$statement_instance = $database_instance->prepare("SELECT * FROM users WHERE username = :name; ");
	
						$statement_instance->bindValue(':name', $user_name);
										$statement_instance->execute();
						$result_row = $statement_instance->fetch(PDO::FETCH_ASSOC);

				if(	$result_row['username']!=null)
				{
	return false;
				}
				else
				{
					
					
					
					
					
					
$statement_instance = $database_instance->prepare("INSERT INTO users (username,password) VALUES (:name,:password); ");

				$statement_instance->bindValue(':name', $user_name);

		$statement_instance->bindValue(':password', $password_value);
						$statement_instance->execute();


					return true;
				}
	}

	
    		public function authenticate($user_name, $password_value) 
			{
   
		
					$db = db_connect();
		
        					$statement = $db->prepare("SELECT * FROM users WHERE username = :username;");
	$statement->bindValue(':username', $user_name);
	$statement->execute();
	$rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		if (password_verify($password_value, $rows['password'])) {
			
			
			
						$_SESSION['auth'] = 1;
unset($_SESSION['failedAuth']);
						header('Location: /home');
					die;
		} else {
						if(isset($_SESSION['failedAuth'])) {
										$_SESSION['failedAuth'] ++; //increment
						} else {
$_SESSION['failedAuth'] = 1;
			}
					header('Location: /login');
			die;
		}
    }
	
}

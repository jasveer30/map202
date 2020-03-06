<?php

class Login extends Controller {

    public function index() {		
		$this->view('login/index');
    }
    
	
	 public function register() 
	   {	
			$this->view('login/register');
    	}
	
    public function verify(){	
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
		$user = $this->model('User');
		
		$user->authenticate($username, $password);
		
        
    }
	
	
	 
	
		public function checkUser() 
		{	
			
			try{
			 									$uname = $_REQUEST['username'];
							$password = $_REQUEST['password'];

$number = preg_match('@[0-9]@', $password); 
			
			
 $specialchars = preg_match('@[^\w]@', $password);
			
		
		
					$uppercase = preg_match('@[A-Z]@', $password);
		
		
 			
			
			
			
			
		if(!$uppercase || !$specialchars  || strlen($password) < 3 || !$number) {
			
			$_SESSION['$data_valid']=-1;
			
						$_SESSION['passw_error']="Password must contain a Capital Letter, a Number, a special char and must be minimum three characters length";
			
			
			
			
			
		   $this->view('login/register');
			
			

		}else{
$user = $this->model('User');
			
			
			
			$pass= password_hash($password, PASSWORD_DEFAULT);

			
			
					$data_valid=$user->saveUser($uname, $pass);
			
			

if($data_valid)
{
											$_SESSION['$data_valid']=1;
											$this->view('login/register');

			}
							else
							{
								$_SESSION['$data_valid']=-1;
				
				
									$_SESSION['errormessage']="User Exists";
$this->view('login/register');	
			}
	
		}
		}
	
	catch(Exception $e) 
		{
			return false;
		}

		}
}

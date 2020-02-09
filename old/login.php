<?php
	require_once('header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
//echo 'hello, your catogory is '.$_POST['sault_college'].' Thanks!';


	
session_start();
	include 'user.php';
/*	include 'db.php';
 include 'user.php';
	$conn=db_connect();
   validate_user();
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT password FROM users where username='".$_POST['uname']."'");
		$stmt->execute();
	    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	   if ($stmt->rowCount() > 0) {
    			foreach ($results as $row) { 
					if ($row['password']!=null)
					{
						if (password_verify($_POST['password'] ,$row['password'])) {
							
							$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

                           $_SESSION['isAuthenticated'] = 1;	
							
							echo "<script> location.href='secret.php'; </script>";
                         
					}
						else 
						{
							if(isset($_SESSION['fail']))
{
$_SESSION['fail'] ++; //increment
} else {
$_SESSION['fail'] = 1;
}

						}
				}
	   }
}
}
	catch(PDOException $ex) {
    echo "Error is: " . $ex->getMessage();
}
$conn = null;
*/
	validate_user($_POST['uname'],$_POST['password']);
}
?>

<h2>Login Form</h2>

<form method="post" >
 

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>


<?php
	require_once('footer.php');
?>

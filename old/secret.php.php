<?php
	session_start();
if($_SESSION['isAuthenticated']==1)
{
	echo ' Welcome to our Team';
}
else
{
	
	 echo "<script> location.href='login.php'; </script>";
}
?>
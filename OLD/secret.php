<?php
	session_start();
if($_SESSION['isAuthenticated']==1)
{
	echo ' Welcome to our secret page';
}
else
{
	echo '<h1> Welcome to our secret page</h1>';
	 //echo "<script> location.href='login.php'; </script>";
}
?>
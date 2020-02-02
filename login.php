<?php
	require_once('header.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	
//echo 'hello, your catogory is '.$_POST['sault_college'].' Thanks!';


	
session_start();
	include 'user.php';

	validate_user($_POST['uname'],$_POST['password']);
}
?>

<h2>Welcome to employee Login desk</h2>

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

</form>


<?php
	require_once('footer.php');
?>

<?php
include 'db.php';
 session_start();
function validate_user($uname,$password)
{ 
	try 
	{//  $db=db_connect();
		$query = "SELECT password FROM user WHERE user_name = :uname";
	
	$conn=db_connect();
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare($query);
	$stmt->bindParam(':user_name', $user_name);
		$stmt->execute();
	    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	   if ($stmt->rowCount() > 0) {
    			foreach ($results as $row) { 
					if ($row['password']!=null)
					{
						if (password_verify($password ,$row['password'])) {
							
							$_SESSION["favcolor"] = "black";
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



}
?>
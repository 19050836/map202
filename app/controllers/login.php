<?php


class Login extends Controller {

    public function index() {		
		$this->view('login/index');
    }
    
    public function verify(){
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
		$user = $this->model('User');
		
		$user->authenticate($username, $password);
		
        
    }
	
	   public function register() {	
		//   echo "hello";
		$this->view('login/register');
    }

	public function validate() {	
		 $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
		
//echo $password = $_REQUEST['password'];
        ;
// Validate password strength
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
	$_SESSION['isValidLogin']=-1;
	$_SESSION['registerMessage']="Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character";
   $this->view('login/register');
	
}else{

	$password= password_hash($password, PASSWORD_DEFAULT);
	$user = $this->model('User');
  $validUser=$user->registerUser($username, $password);

	if($validUser)
	{
		$_SESSION['isValidLogin']=1;
		 $this->view('login/register');
		
	}
	else
	{
		$_SESSION['isValidLogin']=-1;
		$_SESSION['registerMessage']="User Already Exists";
		$this->view('login/register');	
	}
    
}
    }
}

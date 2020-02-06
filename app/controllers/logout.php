<?php
class Logout extends Controller {
	public function inder() {
		
		session_destroy();
		header('Location: /login');
	}
}
	
?>
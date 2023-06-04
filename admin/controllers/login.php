<?php require_once('models/Users.php');

class LoginController {
	public function index() {
		require_once('views/pages/login.php');
		if (isset($_POST['loggedin']) && $_POST['loggedin']==true) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$result = Users::find($username);
			$db_password = $result['password'];
			if($password != $db_password) {
				$status = false;
				$message = "Failed to login";
				$url = "?controller=login&action=index";
				$location = "Login";
				require_once('views/pages/redirect.php');
			} else {
				$_SESSION['loggedin'] = 'loggedin';
				$status = true;
				$message = "Successfully logged in";
				$url = "?controller=chubops&action=chubops_list";
				$location = "Chubops List";
				require_once('views/pages/redirect.php');
			}
		}
    }
	
	public function error() {
      require_once('views/pages/error.php');
    }
}

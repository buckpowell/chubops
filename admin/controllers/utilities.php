<?php

  class UtilitiesController {
	  
    public function index() {

    }
	
	public function view(){
		require_once('views/pages/change.php');
	}
	
	public function update() {
        $params= $_POST;
		$result = Admin::updatePassword($params);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$url = "?controller=utilities&action=view";
			$location = "Password";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=utilities&action=view";
			$location = "Password";
			require_once('views/pages/redirect.php');
		}
    }
	
	public function logout() {
        $status = true;
		$message = "Successfully logged out";
		$url = "../index.php";
		$location = "Home Page";
		require_once('views/pages/redirect.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
}

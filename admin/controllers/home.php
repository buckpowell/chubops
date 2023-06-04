<?php

  class HomeController {
	public function index() 
	{
		
	}
	
	public function viewtop() {
		$result = Admin::FetchPage('home_top');
		$url = "?controller=home&action=edittop";
		require_once('views/pages/edit_page.php');
	}
	
	public function edittop() {
		$url = "?controller=home&action=viewtop"; 
		$content = $_POST['content'];
		$page = 'home_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Home Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=home&action=edittop";
			$location = "Home Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public function viewbody() {
		$url = "?controller=home&action=editbody";
		$result = Admin::FetchPage('home_body');
		require_once('views/pages/edit_page.php');
	}
	
	public function editbody() {
		$url = "?controller=home&action=viewbody";
		$content = $_POST['content'];
		$page = 'home_body';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Home Body";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=home&action=editbody";
			$location = "Home";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public function viewbottom() {
		$url = "?controller=home&action=editbottom";
		$result = Admin::FetchPage('home_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public function editbottom() {
		$url = "?controller=home&action=viewbottom";
		$content = $_POST['content'];
		$page = 'home_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Home Bottom";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=home&action=editbottom";
			$location = "Home Bottom";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}

    public function error() {
      require_once('views/pages/error.php');
    }
}

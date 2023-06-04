<?php 

  class SuperstarController {
	  
    public function index() {
        
    }
	
	public static function view_superstar_top() {
		$url = "?controller=superstar&action=edit_superstar_top";
		$result = Admin::FetchPage('superstar_top');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_superstar_top() {
		$url = "?controller=superstar&action=view_superstar_top";
		$content = $_POST['content'];
		$page = 'superstar_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Superstar Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=superstar&action=edit_superstar_top";
			$location = "Superstar Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public static function view_superstar_bottom() {
		$url = "?controller=superstar&action=edit_superstar_bottom";
		$result = Admin::FetchPage('superstar_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_superstar_bottom() {
	$url = "?controller=superstar&action=view_superstar_bottom";
	$content = $_POST['content'];
		$page = 'superstar_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Superstar Footer";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=superstar&action=edit_superstar_bottom";
			$location = "Superstar Footer";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}

    public function error() {
      require_once('views/pages/error.php');
    }
}

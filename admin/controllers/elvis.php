<?php 

  class ElvisController {
	  
    public function index() {
        
    }
	
	public static function view_elvis_top() {
		$url = "?controller=elvis&action=edit_elvis_top";
		$result = Admin::FetchPage('elvis_top');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_elvis_top() {
		$url = "?controller=elvis&action=view_elvis_top";
		$content = $_POST['content'];
		$page = 'elvis_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Elvis Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=elvis&action=edit_elvis_top";
			$location = "Elvis Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public static function view_elvis_bottom() {
		$url = "?controller=elvis&action=edit_elvis_bottom";
		$result = Admin::FetchPage('elvis_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_elvis_bottom() {
	$url = "?controller=elvis&action=view_elvis_bottom";
	$content = $_POST['content'];
		$page = 'elvis_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Elvis Footer";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=elvis&action=edit_elvis_bottom";
			$location = "Elvis Footer";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
    public function error() {
      require_once('views/pages/error.php');
    }
}

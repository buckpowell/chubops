<?php 

  class StonesController {
	  
    public function index() {
        
    }
	
	public static function view_stones_top() {
		$url = "?controller=stones&action=edit_stones_top";
		$result = Admin::FetchPage('stones_top');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_stones_top() {
		$url = "?controller=stones&action=view_stones_top";
		$content = $_POST['content'];
		$page = 'stones_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Rolling Stones Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=stones&action=edit_stones_top";
			$location = "Rolling Stones Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public static function view_stones_bottom() {
		$url = "?controller=stones&action=edit_stones_bottom";
		$result = Admin::FetchPage('stones_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_stones_bottom() {
	$url = "?controller=stones&action=view_stones_bottom";
	$content = $_POST['content'];
		$page = 'stones_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Rolling Stones Footer";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=stones&action=edit_stones_bottom";
			$location = "Rolling Stones Footer";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}

    public function error() {
      require_once('views/pages/error.php');
    }
}

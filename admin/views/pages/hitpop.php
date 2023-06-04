<?php 

  class HitpopController {
    public function index() {
        
    }
	
	public static function view_hitpop_top() {
		$url = "?controller=hitpop&action=edit_hitpop_top";
		$result = Admin::FetchPage('hitpop_top');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_hitpop_top() {
		$url = "?controller=hitpop&action=view_hitpop_top";
		$content = $_POST['content'];
		$page = 'hitpop_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Hitpop Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=hitpop&action=edit_hitpop_top";
			$location = "Hitpop Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public static function view_hitpop_bottom() {
		$url = "?controller=hitpop&action=edit_hitpop_bottom";
		$result = Admin::FetchPage('hitpop_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_hitpop_bottom() {
	$url = "?controller=hitpop&action=view_hitpop_bottom";
	$content = $_POST['content'];
		$page = 'hitpop_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Hitpop Footer";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=hitpop&action=edit_hitpop_bottom";
			$location = "Hitpop Footer";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}

    public function error() {
      require_once('views/pages/error.php');
    }
}

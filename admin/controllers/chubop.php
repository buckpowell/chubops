<?php 

  class ChubopController {
    public function index() {
        
    }
	
	public static function view_chubop_top() {
		$url = "?controller=chubop&action=edit_chubop_top";
		$result = Admin::FetchPage('chubop_top');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_chubop_top() {
		$url = "?controller=chubop&action=view_chubop_top";
		$content = $_POST['content'];
		$page = 'chubop_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Chubop Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=chubop&action=edit_chubop_top";
			$location = "Chubop Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public static function view_chubop_bottom() {
		$url = "?controller=chubop&action=edit_chubop_bottom";
		$result = Admin::FetchPage('chubop_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_chubop_bottom() {
	$url = "?controller=chubop&action=view_chubop_bottom";
	$content = $_POST['content'];
		$page = 'chubop_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Chubop Footer";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=chubop&action=edit_chubop_bottom";
			$location = "Chubop Footer";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}

    public function error() {
      require_once('views/pages/error.php');
    }
}

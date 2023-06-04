<?php 

  class CollectablesController {
    public function index() {
        
    }
	
	public static function view_collectables_top() {
		$url = "?controller=collectables&action=edit_collectables_top";
		$result = Admin::FetchPage('collectables_top');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_collectables_top() {
		$url = "?controller=collectables&action=view_collectables_top";
		$content = $_POST['content'];
		$page = 'collectables_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Collectables Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=collectables&action=edit_collectables_top";
			$location = "Collectables Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public static function view_collectables_bottom() {
		$url = "?controller=collectables&action=edit_collectables_bottom";
		$result = Admin::FetchPage('collectables_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_collectables_bottom() {
	$url = "?controller=collectables&action=view_collectables_bottom";
	$content = $_POST['content'];
		$page = 'collectables_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Collectables Footer";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=collectables&action=edit_collectables_bottom";
			$location = "Collectables Footer";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}

    public function error() {
      require_once('views/pages/error.php');
    }
}

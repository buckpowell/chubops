<?php 


  class BeatlesController {
	  
    public function index() {
        
    }

	public static function view_beatles_top() {
		$url = "?controller=beatles&action=edit_beatles_top";
		$result = Admin::FetchPage('beatles_top');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_beatles_top() {
		$url = "?controller=beatles&action=view_beatles_top";
		$content = $_POST['content'];
		$page = 'beatles_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Beatles Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=beatles&action=edit_beatles_top";
			$location = "Beatles Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public static function view_beatles_bottom() {
		$url = "?controller=beatles&action=edit_beatles_bottom";
		$result = Admin::FetchPage('beatles_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_beatles_bottom() {
	$url = "?controller=beatles&action=view_beatles_bottom";
	$content = $_POST['content'];
		$page = 'beatles_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Beatles Footer";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=beatles&action=edit_beatles_bottom";
			$location = "Beatles Footer";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
    public function error() {
      require_once('views/pages/error.php');
    }
}

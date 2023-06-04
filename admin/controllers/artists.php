<?php 

include ('models/Admin.php');

  class ArtistsController {
    public function index() {
        
    }
	
	public static function view_elvis_top() {
		$url = "?controller=artists&action=edit_elvis_top";
		$result = Admin::FetchPage('elvis_top');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_elvis_top() {
		$url = "?controller=artists&action=view_elvis_top";
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
			$url = "?controller=artists&action=edit_elvis_top";
			$location = "Elvis Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public static function view_elvis_bottom() {
		$url = "?controller=artists&action=edit_elvis_bottom";
		$result = Admin::FetchPage('elvis_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_elvis_bottom() {
	$url = "?controller=artists&action=view_elvis_bottom";
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
			$url = "?controller=artists&action=edit_elvis_bottom";
			$location = "Elvis Footer";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public static function view_beatles_top() {
		$url = "?controller=artists&action=edit_beatles_top";
		$result = Admin::FetchPage('beatles_top');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_beatles_top() {
		$url = "?controller=artists&action=view_beatles_top";
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
			$url = "?controller=artists&action=edit_beatles_top";
			$location = "Beatles Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public static function view_beatles_bottom() {
		$url = "?controller=artists&action=edit_beatles_bottom";
		$result = Admin::FetchPage('beatles_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_beatles_bottom() {
	$url = "?controller=artists&action=view_beatles_bottom";
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
			$url = "?controller=artists&action=edit_beatles_bottom";
			$location = "Beatles Footer";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public static function view_stones_top() {
		$url = "?controller=artists&action=edit_stones_top";
		$result = Admin::FetchPage('stones_top');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_stones_top() {
		$url = "?controller=artists&action=view_stones_top";
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
			$url = "?controller=artists&action=edit_stones_top";
			$location = "Rolling Stones Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public static function view_stones_bottom() {
		$url = "?controller=artists&action=edit_stones_bottom";
		$result = Admin::FetchPage('stones_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public static function edit_stones_bottom() {
	$url = "?controller=artists&action=view_stones_bottom";
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
			$url = "?controller=artists&action=edit_stones_bottom";
			$location = "Rolling Stones Footer";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}

    public function error() {
      require_once('views/pages/error.php');
    }
}

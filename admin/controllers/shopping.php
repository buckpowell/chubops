<?php 

  class ShoppingController {
	  
    public function index() {
        require_once('views/pages/shopping.php');
    }

	public function viewtop() {
		$url = "?controller=shopping&action=edittop";
		$result = Admin::FetchPage('shopping_top');
		require_once('views/pages/edit_page.php');
	}
	
	public function edittop() {
		$url = "?controller=shopping&action=viewtop";
		$content = $_POST['content'];
		$page = 'shopping_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Shopping Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=shopping&action=edittop";
			$location = "Shopping Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public function viewbody() {
		$url = "?controller=shopping&action=editbody";
		$result = Admin::FetchPage('shopping_body');
		require_once('views/pages/edit_page.php');
	}
	
	public function editbody() {
		$url = "?controller=shopping&action=viewbody";
		$content = $_POST['content'];
		$page = 'shopping_body';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			
			$location = "Shopping Body";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=shopping&action=editbody";
			$location = "Shopping Body";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public function viewbottom() {
		$url = "?controller=shopping&action=editbottom";
		$result = Admin::FetchPage('shopping_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public function editbottom() {
		$url = "?controller=shopping&action=viewbottom";
		$content = $_POST['content'];
		$page = 'shopping_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Shopping Bottom";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=shopping&action=editbottom";
			$location = "Shopping Bottom";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
    public function error() {
      require_once('views/pages/error.php');
    }
}

<?php 

  class ListController {
	  
    public function index() {
        require_once('views/pages/list.php');
    }
	
	public function viewtop() {
		$url = "?controller=list&action=edittop";
		$result = Admin::FetchPage('list_top');
		require_once('views/pages/edit_page.php');
	}
	
	public function edittop() {
		$url = "?controller=list&action=viewtop";
		$content = $_POST['content'];
		$page = 'list_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "List Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=list&action=edittop";
			$location = "List Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public function viewbottom() {
		$url = "?controller=list&action=editbottom";
		$result = Admin::FetchPage('list_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public function editbottom() {
		$url = "?controller=list&action=viewbottom";
		$content = $_POST['content'];
		$page = 'list_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "List Footer";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=list&action=editbottom";
			$location = "List Footer";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}

    public function error() {
      require_once('views/pages/error.php');
    }
}

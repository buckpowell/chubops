<?php 

  class BoxedController {
	  
    public function index() {
		
    }
	
	public function boxed_list() {
		$result = Admin::fetchAllBoxed();
        require_once('views/pages/boxed_list.php');
	}
	
	public function view() {
		$id = $_GET['id'];
		$result = Admin::fetchBoxedById($id);
		require_once('views/pages/boxed_view.php');
	}
	
	public function update() {
		$params = $_POST;
		$result = Admin::updateBoxed($params);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$url = "?controller=boxed&action=boxed_list";
			$location = "Boxed List";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=boxed&action=view";
			$location = "Boxed List";
			require_once('views/pages/redirect.php');
		}
	}
	
	public function view_new() {
		require_once('views/pages/boxed_add.php');
	}
	
	public function add() {
		$params = $_POST;
		$result = Admin::addBoxed($params);
		if($result){ 
			$status = true;
			$url = "?controller=boxed&action=list";
			$message = "Successfully updated record";
			$location = "Boxed Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=boxed&action=add";
			$location = "Boxed Header";
			require_once('views/pages/redirect.php');
		}
	}
	
	public function viewtop() {
		$url = "?controller=boxed&action=edittop";
		$result = Admin::FetchPage('boxed_top');
		require_once('views/pages/edit_page.php');
	}
	
	public function edittop() {
		$url = "?controller=boxed&action=viewtop";
		$content = $_POST['content'];
		$page = 'boxed_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Boxed Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=boxed&action=edittop";
			$location = "Boxed Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public function viewbody() {
		$url = "?controller=boxed&action=editbody";
		$result = Admin::FetchPage('boxed_body');
		require_once('views/pages/edit_page.php');
	}
	
	public function editbody() {
		$url = "?controller=boxed&action=viewbody";
		$content = $_POST['content'];
		$page = 'boxed_body';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Boxed Body";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=boxede&action=editbody";
			$location = "Boxed Body";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public function viewbottom() {
		$url = "?controller=boxed&action=editbottom";
		$result = Admin::FetchPage('boxed_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public function editbottom() {
		$url = "?controller=boxed&action=viewbottom";
		$content = $_POST['content'];
		$page = 'boxed_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Boxed Bottom";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=boxed&action=editbottom";
			$location = "Boxed Bottom";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}

    public function error() {
      require_once('views/pages/error.php');
    }
}

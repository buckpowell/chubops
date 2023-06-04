<?php 

  class HitpopsController {
	  
    public function index() {
		
    }
	
	public function hitpops_list() {
		$result = Admin::fetchAllHitpops();
        require_once('views/pages/hitpops_list.php');
	}
		
	public function view() {
		$id = $_GET['id'];
		$result = Admin::FetchHitpop($id);
		require_once('views/pages/hitpops_view.php');
	}
	
	public function update() {
		$params = $_POST;
		$result = Admin::UpdateHitpop($params);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$url = "?controller=hitpops&action=hitpops_list";
			$location = "Hitpops List";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=hitpops&action=view&id=".$params['id'];
			$location = "Hitpops List";
			require_once('views/pages/redirect.php');
		}
	}
	
	public function viewtop() {
		$url = "?controller=hitpops&action=edittop";
		$result = Admin::FetchPage('hitpops_top');
		require_once('views/pages/edit_page.php');
	}
	
	public function edittop() {
		$url = "?controller=hitpops&action=viewtop";
		$content = $_POST['content'];
		$page = 'hitpops_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Hitpops Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=hitpops&action=edittop";
			$location = "Hitpops Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public function viewbottom() {
		$url = "?controller=hitpops&action=editbottom";
		$result = Admin::FetchPage('hitpops_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public function editbottom() {
		$url = "?controller=hitpops&action=viewbottom";
		$content = $_POST['content'];
		$page = 'hitpops_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Hitpops Footer";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=hitpops&action=editbottom";
			$location = "Hitpops Footer";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}

    public function error() {
      require_once('views/pages/error.php');
    }
}

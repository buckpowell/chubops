<?php 

  class ChubopsController {
	  
    public function index() {
		
    }
	
	public function chubops_list() {
		$result = Admin::fetchAllChubops();
        require_once('views/pages/chubops_list.php');
	}
		
	public function view() {
		$id = $_GET['id'];
		$result = Admin::FetchChubop($id);
		require_once('views/pages/chubops_view.php');
	}
	
	public function update() {
		$params = $_POST;
		$result = Admin::UpdateChubop($params);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$url = "?controller=chubops&action=chubops_list";
			$location = "Chubops List";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=chubops&action=view&id=".$params['id'];
			$location = "Chubops List";
			require_once('views/pages/redirect.php');
		}
	}
	
	public function viewtop() {
		$url = "?controller=chubops&action=edittop";
		$result = Admin::FetchPage('chubops_top');
		require_once('views/pages/edit_page.php');
	}
	
	public function edittop() {
		$url = "?controller=chubops&action=viewtop";
		$content = $_POST['content'];
		$page = 'chubops_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Chubops Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=chubops&action=edittop";
			$location = "Chubops Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public function viewbottom() {
		$url = "?controller=chubops&action=editbottom";
		$result = Admin::FetchPage('chubops_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public function editbottom() {
		$url = "?controller=chubops&action=viewbottom";
		$content = $_POST['content'];
		$page = 'chubops_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Chubops Footer";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=chubops&action=editbottom";
			$location = "Chubops Footer";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}

    public function error() {
      require_once('views/pages/error.php');
    }
}

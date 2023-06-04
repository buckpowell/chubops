<?php 

  class EbayController {
	  
	public function index() {
	  
	}
	  
	/*public function list() {
		$result = Admin::fetchList();
		require_once('views/pages/ebay_list.php');
	}
	
	public function view() {
		$id = $_GET['id'];
		$result = Admin::fetchEbay($id);
		require_once('views/pages/ebay_view.php');
	}
	
	public function update() {
		$params = $_POST;
		$result = Admin::updateEbay($params);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$url = "?controller=ebay&action=list";
			$location = "Ebay";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=ebay&action=view&id=".$params['id'];
			$location = "Ebay";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/ebay_list.php');
	}
	public function add() {
		$params = $_POST;
		$result = Admin::addEbay($params);
		if($result){ 
			$status = true;
			$url = "?controller=ebay&action=list";
			$message = "Successfully updated record";
			$location = "eBay Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=ebay&action=newpic";
			$location = "eBay Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/ebay_add.php');
	}
	
	public function viewtop() {
		$url = "?controller=ebay&action=edittop";
		$result = Admin::FetchPage('ebay_top');
		require_once('views/pages/edit_page.php');
	}
	
	public function edittop() {
		$url = "?controller=ebay&action=viewtop";
		$content = $_POST['content'];
		$page = 'ebay_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Ebay Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=ebay&action=edittop";
			$location = "Ebay Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public function viewbottom() {
		$url = "?controller=ebay&action=editbottom";
		$result = Admin::FetchPage('ebay_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public function editbottom() {
		$url = "?controller=ebay&action=viewbottom";
		$content = $_POST['content'];
		$page = 'ebay_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Ebay Bottom";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=ebay&action=editbottom";
			$location = "Ebay Bottom";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public function new() {
		require_once('views/pages/ebay_add.php');
	}
	
	public function listtemplates() {
		$result = Admin::listTemplates();
		require_once('views/pages/template_list.php');
	}
	
	public function view_template() {
		$id = $_GET['id'];
		$result = Admin::editTemplate($id);
		require_once('views/pages/template_edit.php');
	}*/

    public function error() {
      require_once('views/pages/error.php');
    }
}

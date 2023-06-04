<?php 

  class ShippingController {
	  
    public function index() {
        require_once('views/pages/shipping.php');
    }

	public function viewtop() {
		$url = "?controller=shipping&action=edittop";
		$result = Admin::FetchPage('shipping_top');
		require_once('views/pages/edit_page.php');
	}
	
	public function edittop() {
		$url = "?controller=shipping&action=viewtop";
		$content = $_POST['content'];
		$page = 'shipping_top';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Shipping Header";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=shipping&action=edittop";
			$location = "Shipping Header";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public function viewbody() {
		$url = "?controller=shipping&action=editbody";
		$result = Admin::FetchPage('shipping_body');
		require_once('views/pages/edit_page.php');
	}
	
	public function editbody() {
		$url = "?controller=shipping&action=viewbody";
		$content = $_POST['content'];
		$page = 'shipping_body';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Shipping Body";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=shipping&action=editbody";
			$location = "Shipping Body";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
	public function viewbottom() {
		$url = "?controller=shipping&action=editbottom";
		$result = Admin::FetchPage('shipping_bottom');
		require_once('views/pages/edit_page.php');
	}
	
	public function editbottom() {
		$url = "?controller=shipping&action=viewbottom";
		$content = $_POST['content'];
		$page = 'shipping_bottom';
		$result = Admin::editPage($content, $page);
		if($result){ 
			$status = true;
			$message = "Successfully updated record";
			$location = "Shipping Bottom";
			require_once('views/pages/redirect.php');
		} else {
			$status = false;
			$message = "Failed to updated record";
			$url = "?controller=shipping&action=editbottom";
			$location = "Shipping Bottom";
			require_once('views/pages/redirect.php');
		}
		require_once('views/pages/edit_page.php');
	}
	
    public function error() {
      require_once('views/pages/error.php');
    }
}

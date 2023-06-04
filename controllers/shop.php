<?php

class ShopController {

	public function index() {

		$result = Chubops::fetchList('shopping');
		$pages = Chubops::fetchPages('shopping');
		for ($i=0; $i < count($pages); $i++) {
			switch ($pages[$i]['page']) {
				case 'shopping_top':
				$top = $pages[$i]['content'];
				break;
				case 'shopping_body':
				$body = $pages[$i]['content'];
				break;
				case 'shopping_bottom':
				$bottom = $pages[$i]['content'];
				break;
			}	
		}
		require_once('views/pages/shopping.php');
	}

	public function error() {
		require_once('views/pages/error.php');
	}
}
?>
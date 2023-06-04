<?php

class ShipController {
	public function index() {

		$ship = Chubops::FetchChubopsRandom();
		
		$left = array_slice($ship,0,7);
		$right = array_slice($ship,8,7);
		/*display all content*/
		$pages = Chubops::fetchPages('shipping');
		for ($i=0; $i < count($pages); $i++) {
			switch ($pages[$i]['page']) {
				case 'shipping_top':
				$top = $pages[$i]['content'];
				break;
				case 'shipping_body':
				$body = $pages[$i]['content'];
				break;
				case 'shipping_bottom':
				$bottom = $pages[$i]['content'];
				break;
			}	
		}
		/*display the shipping page*/
		require_once('views/pages/shipping.php');
	}

	public function error() {
		require_once('views/pages/error.php');
	}
}
?>
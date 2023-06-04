<?php

class BoxedController {
	
	/*fetch the main boxed page*/
	public function index() {
		$boxed = Chubops::FetchBoxedRandom();
		$left = array_slice($boxed,0,8);
		$right = array_slice($boxed, 9,8);
		$pages = Chubops::fetchPages('boxed');
		for ($i=0; $i < count($pages); $i++) {
			switch ($pages[$i]['page']) {
				case 'boxed_top':
				$top = $pages[$i]['content'];
				break;
				case 'boxed_body':
				$body = $pages[$i]['content'];
				break;
				case 'boxed_bottom':
				$bottom = $pages[$i]['content'];
				break;
			}	
			
		}	
		require_once('views/pages/boxed.php');
	}

	/*fetch the elvis boxed page*/
	public function elvis() {
	
	    $id = $_GET['id'];
		$shared = Chubops::fetchBoxedType($id);
		$pages = Chubops::fetchPages('elvis');
		for ($i=0; $i < count($pages); $i++) {
			switch ($pages[$i]['page']) {
				case 'elvis_top':
				$top = $pages[$i]['content'];
				break;
				case 'elvis_body':
				$body = $pages[$i]['content'];
				break;
				case 'elvis_bottom':
				$bottom = $pages[$i]['content'];
				break;
			}	
		}
		
		require_once('views/pages/shared.php');
	}
	
	/*fetch the beatles boxed page*/
	public function beatles() {
		
		$id = $_GET['id'];
		$shared = Chubops::fetchBoxedType($id);
		$pages = Chubops::fetchPages('beatles');
		for ($i=0; $i < count($pages); $i++) {
			switch ($pages[$i]['page']) {
				case 'beatles_top':
				$top = $pages[$i]['content'];
				break;
				case 'beatles_body':
				$body = $pages[$i]['content'];
				break;
				case 'beatles_bottom':
				$bottom = $pages[$i]['content'];
				break;
			}	
		}
		require_once('views/pages/shared.php');
	}
	
	/*fetch the stones boxed page*/
	public function stones() {
		
		$id = $_GET['id'];
		$shared = Chubops::fetchBoxedType($id);
		$pages = Chubops::fetchPages('stones');
		for ($i=0; $i < count($pages); $i++) {
			switch ($pages[$i]['page']) {
				case 'stones_top':
				$top = $pages[$i]['content'];
				break;
				case 'stones_body':
				$body = $pages[$i]['content'];
				break;
				case 'stones_bottom':
				$bottom = $pages[$i]['content'];
				break;
			}	
		}
		require_once('views/pages/shared.php');
	}
	
	/*fetch the superstar boxed page*/
	public function superstar() {
		
		$id = $_GET['id'];
		$shared = Chubops::fetchBoxedType($id);
		$pages = Chubops::fetchPages('superstar');
		for ($i=0; $i < count($pages); $i++) {
			switch ($pages[$i]['page']) {
				case 'superstar_top':
				$top = $pages[$i]['content'];
				break;
				case 'superstar_body':
				$body = $pages[$i]['content'];
				break;
				case 'superstar_bottom':
				$bottom = $pages[$i]['content'];
				break;
			}	
		}
		require_once('views/pages/shared.php');
	}
	
	/*fetch the memorabilia boxed page*/
	public function collectables() {
		
		$id = $_GET['id'];
		$shared = Chubops::fetchBoxedType($id);
		$pages = Chubops::fetchPages('collectables');
		for ($i=0; $i < count($pages); $i++) {
			switch ($pages[$i]['page']) {
				case 'collectables_top':
				$top = $pages[$i]['content'];
				break;
				case 'collectables_body':
				$body = $pages[$i]['content'];
				break;
				case 'collectables_bottom':
				$bottom = $pages[$i]['content'];
				break;
			}	
		}
		require_once('views/pages/shared.php');
	}
	
	/*fetch the chubops boxed page*/
	public function chubop() {
		
		$id = $_GET['id'];
		$shared = Chubops::fetchBoxedType($id);
		$pages = Chubops::fetchPages('chubop');
		for ($i=0; $i < count($pages); $i++) {
			switch ($pages[$i]['page']) {
				case 'chubop_top':
				$top = $pages[$i]['content'];
				break;
				case 'chubop_body':
				$body = $pages[$i]['content'];
				break;
				case 'chubop_bottom':
				$bottom = $pages[$i]['content'];
				break;
			}	
		}
		require_once('views/pages/shared.php');
	}
	
	/*diplays error when undocumented action is called*/
	public function error() {
	  require_once('views/pages/error.php');
	}
}
?>
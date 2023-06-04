<?php

  class HomeController {
    public function index() {
		global $top;
		global $body;
		global $bottom;
		/*fetch all chubops*/
		$list = Chubops::FetchChubopsRandom();
		$left = array_slice($list,0,7);
		$right = array_slice($list,8,7);
		$pages = Chubops::fetchPages('home');
		for ($i=0; $i < count($pages); $i++) {
			switch ($pages[$i]['page']) {
				case 'home_top':
				$top = $pages[$i]['content'];
				break;
				case 'home_body':
				$body = $pages[$i]['content'];
				break;
				case 'home_bottom':
				$bottom = $pages[$i]['content'];
				break;
			}	
		}

        require_once('views/pages/home.php');

    }

    public function error() {
      require_once('views/pages/error.php');
    }
}




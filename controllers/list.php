<?php

class ListController {
	
	public function chubops() 
	{
		$result = Chubops::fetchList('chubops');
		$pages = Chubops::fetchPages('list');
		for ($i=0; $i < count($pages); $i++) {
			switch ($pages[$i]['page']) {
				case 'list_top':
				$top = $pages[$i]['content'];
				break;
				case 'list_body':
				$body = $pages[$i]['content'];
				break;
				case 'list_bottom':
				$bottom = $pages[$i]['content'];
				break;
			}	
		}
		require_once('views/pages/list.php');
    }
	
	public function hitpops() 
	{
		$hitpops = Chubops::fetchList('foreign');
		$pages = Chubops::fetchPages('list');
		for ($i=0; $i < count($pages); $i++) {
			switch ($pages[$i]['page']) {
				case 'list_top':
				$top = $pages[$i]['content'];
				break;
				case 'list_body':
				$body = $pages[$i]['content'];
				break;
				case 'list_bottom':
				$bottom = $pages[$i]['content'];
				break;
			}	
		}
		require_once('views/pages/foreign_list.php');
	}
	
	public function error() 
	{
		require_once('views/pages/error.php');
    }
  }
?>
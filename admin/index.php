<?php
	/*the requires are in index so we dont have to include them in each controller*/
	require_once('models/Database.php');
	require_once('models/Admin.php');
	session_start();
	ini_set('session.save_path', $_SERVER['HTTP_HOST'] . '/chubops/admin/session');
	
	if (isset($_GET['controller']) && isset($_GET['action'])) {
		$controller = $_GET['controller'];
		$action     = $_GET['action'];
	} else {
		$controller = 'login';
		$action     = 'index';
	}

  require_once('views/layout.php');
?>
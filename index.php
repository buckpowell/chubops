<?php
  /*the requires are in index so we dont have to include them in each controller*/
	require_once('models/Database.php');
	require_once('models/Chubops.php');
	

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'home';
    $action     = 'index';
  }

  require_once('views/layout.php');
?>
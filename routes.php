<?php

  function call($controller, $action) {
    require_once('controllers/' . $controller . '.php');
    switch($controller) {
      case 'home':
        $controller = new HomeController();
      break;
      case 'chubops':
        // we need the model to query the database later in the controller
        $controller = new ChubopsController();
      break;
	   case 'hitpops':
        // we need the model to query the database later in the controller
        $controller = new HitpopsController();
      break;
	   case 'list':
        // we need the model to query the database later in the controller
        $controller = new ListController();
      break;
	   case 'boxed':
        // we need the model to query the database later in the controller
        $controller = new BoxedController();
      break;
	   case 'ship':
        // we need the model to query the database later in the controller
        $controller = new ShipController();
      break;
	   case 'shop':
        // we need the model to query the database later in the controller
        $controller = new ShopController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('home' => ['index','error'],
                       'chubops' => ['index', 'error'],
					   'hitpops' => ['index', 'error'],
					   'list' => ['index', 'chubops', 'hitpops', 'error'],
					   'boxed' => ['index', 'elvis', 'beatles', 'stones', 'superstar', 'collectables', 'chubop','error'],
					   'ship' => ['index', 'error'],
					   'shop' => ['index', 'error']
                      );

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('home', 'error');
    }
  } else {
    call('home', 'error');
  }
?>
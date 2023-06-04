<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '.php');
    switch($controller) {
	  case 'login':
		$controller = new LoginController();
		break;
      case 'home':
        $controller = new HomeController();
      break;
      case 'chubops':
        $controller = new ChubopsController();
      break;
	   case 'hitpops':
        $controller = new HitpopsController();
      break;
	   case 'list':
         $controller = new ListController();
      break;
	   case 'boxed':
        $controller = new BoxedController();
      break;
	   case 'elvis':
		$controller = new ElvisController();
	  break;
	  case 'beatles':
		$controller = new BeatlesController();
	  break;
	  case 'stones':
		$controller = new StonesController();
	  break;
	  case 'superstar':
		$controller = new SuperstarController();
	  break;
	  case 'collectables':
		$controller = new CollectablesController();
	  break;
	  case 'chubop':
		$controller = new ChubopController();
	  break;
	   case 'shipping':
        $controller = new ShippingController();
      break;
	   case 'shopping':
        $controller = new ShoppingController();
      break;
	  case 'ebay':
        $controller = new EbayController();
      break;
	  case 'utilities':
        $controller = new UtilitiesController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('login' => ['index', 'error'],
						'home' => ['index', 'viewtop','edittop', 'viewbody', 'editbody', 'viewbottom', 'editbottom','error'],
                        'chubops' => ['index', 'chubops_list', 'view', 'update', 'viewtop','edittop', 'viewbottom', 'editbottom', 'error'],
					    'hitpops' => ['index', 'hitpops_list', 'view', 'update', 'viewtop','edittop', 'viewbottom', 'editbottom', 'error'],
					    'list' => ['index', 'chubops_list', 'view', 'update', 'viewtop','edittop', 'viewbottom', 'editbottom', 'error'],
					    'boxed' => ['index', 'boxed_list', 'view_new', 'viewtop', 'add', 'edittop', 'viewbottom', 'editbottom','view', 'viewbody', 'editbody', 'update', 'error'],
					    'artists' => ['index','view_elvis_top', 'edit_elvis_top', 'view_elvis_bottom', 'edit_elvis_bottom','view_beatles_top', 'edit_beatles_top', 'view_beatles_bottom', 'edit_beatles_bottom', 'view_stones_top', 'edit_stones_top', 'view_stones_bottom', 'edit_stones_bottom','error'],
					    'elvis' => ['index', 'view_elvis_top', 'edit_elvis_top', 'view_elvis_bottom', 'edit_elvis_bottom', 'error'],
						'beatles' => ['index', 'view_beatles_top', 'edit_beatles_top', 'view_beatles_bottom', 'edit_beatles_bottom', 'error'],
						'stones' => ['index', 'view_stones_top', 'edit_stones_top', 'view_stones_bottom', 'edit_stones_bottom', 'error'],
						'superstar' => ['index', 'view_superstar_top', 'edit_superstar_top', 'view_superstar_bottom', 'edit_superstar_bottom', 'error'],
						'collectables' => ['index', 'view_collectables_top', 'edit_collectables_top', 'view_collectables_bottom', 'edit_collectables_bottom', 'error'],
						'chubop' => ['index', 'view_chubop_top', 'edit_chubop_top', 'view_chubop_bottom', 'edit_chubop_bottom', 'error'],
						'shipping' => ['index','viewtop', 'edittop', 'viewbody', 'editbody','viewbottom', 'editbottom','error'],
					    'shopping' => ['index', 'viewtop', 'edittop', 'viewbody', 'editbody','viewbottom', 'editbottom', 'error'],
					    'ebay' => ['index', 'error'/*'list', 'update', 'add', 'new', 'view', 'listtemplates', 'viewtop', 'edittop', 'viewbottom', 'editbottom'*/],
					    'utilities' => ['index', 'view', 'update','logout','error'],
                      );

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('login', 'error');
    }
  } else {
    call('login', 'error');
  }
?>
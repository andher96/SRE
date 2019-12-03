<?php
$ruta = $_SERVER['REQUEST_URI']; // You can also use $_SERVER['REDIRECT_URL'];

require __DIR__ . '/includes/layouts/error/404.php';

/*switch ($ruta) {
    case '/sre/'  :
    	//require __DIR__ . '/includes/layouts/controllers/home.php';
    	break;
	case '/sre/login'  :
		require __DIR__ . '/includes/layouts/login/login.php';
		break;
    default:
    	require __DIR__ . '/includes/layouts/error/404.php';
    	break;
}*/
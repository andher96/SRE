<?php
$ruta = $_SERVER['REQUEST_URI']; // You can also use $_SERVER['REDIRECT_URL'];

switch ($ruta) {
    case '/empresas'  :
    	require __DIR__ . '/includes/layouts/empresas.php';
    	break;
	case '/empresas/registrar'  :
		require __DIR__ . '/includes/layouts/empresas.php';
		break;
    default:
    	require __DIR__ . '/construccion.php';
    	break;
}
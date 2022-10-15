<?php

use App\Controller\HomeController;
use App\Controller\LoginController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) 
{
    case '/':
        header("Location: /login");
    break;

	case '/login':
		LoginController::index();
	break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/logout':
        LoginController::logout();
    break;

    case '/home':
        HomeController::index();
	break;

    default:
        echo "Erro 404";
        break;
}
?>
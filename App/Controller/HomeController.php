<?php

namespace App\Controller;

class HomeController extends Controller
{
	public static function index()
	{
		if (isset($_SESSION["usuario_logado"]) || !isset($_POST["lembrar"]))
			parent::render('\\Home\\Home');
		else
			header("Location: /login");
	}
}

?>
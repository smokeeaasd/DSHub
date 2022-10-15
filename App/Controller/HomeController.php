<?php

namespace App\Controller;

use App\Model\HomeModel;

class HomeController extends Controller
{
	public static function index()
	{
		if (!(isset($_SESSION["usuario_logado"])))
		{
			header("Location: /");
		}
		else
		{
			$model = new HomeModel();

			$model->getAllRows();
			
			parent::render("\\Home\\Home", $model);
		}
	}
}

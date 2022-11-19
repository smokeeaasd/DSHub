<?php

namespace App\Controller;

use App\Model\RegisterModel;
use App\Controller\LoginController;

class RegisterController extends Controller
{
	public static function index()
	{
		parent::render('\\Register\\FormRegister');
	}

	public static function register()
	{
		$model = new RegisterModel();

		$model->email = $_POST['email'];
		$model->usuario = $_POST['usuario'];
		$model->senha = $_POST['senha'];

		$email_existente = $model->temEmail();

		if ($email_existente)
			header("Location: /register?existentemail=true");
		else
		{

			$model->save();
			
			header("Location: /home");
		}
	}
}

?>
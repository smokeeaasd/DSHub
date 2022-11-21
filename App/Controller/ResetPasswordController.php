<?php

namespace App\Controller;

use App\Model\ResetPasswordModel;

class RegisterController extends Controller
{
	public static function index()
	{
		parent::render('\\Register\\FormRegister');
	}

	public static function register()
	{
		$model = new ResetPasswordModel();

		$model->email = $_POST['email'];
		$model->senha = $_POST['senha'];

		$email_existente = $model->checkEmail();

        if ($email_existente != null)
        {

        }

		if ($email_existente)
			header("Location: /register?existentemail=true");
	}
}

?>
<?php

namespace App\Controller;

use App\Model\ResetPasswordModel;

class ResetPasswordController extends Controller
{
	public static function index()
	{
		parent::render('\\Reset\\ResetPassword');
	}

	public static function save()
	{
		$model = new ResetPasswordModel();

		$model->email = $_POST['email'];
		$model->senha = $_POST['senha'];

		$email_existente = $model->checkEmail();

        if ($email_existente != null)
        {
            $model->save();
        } else {
            header("Location: /reset?erro=true");
        }
	}
}

?>
<?php

namespace App\Model;

use App\DAO\LoginDAO;

class LoginModel extends Model
{
	public $id, $usuario, $email, $senha;

	public function autenticar()
	{
		$dao = new LoginDAO();

		$dados_usuario_logado = $dao->verifyAuth($this->email, $this->senha);
		
		if (is_object($dados_usuario_logado))
			return $dados_usuario_logado;
	}
}

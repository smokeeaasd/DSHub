<?php

namespace App\DAO;

use App\Model\LoginModel;
use \PDO;

class LoginDAO extends DAO
{

	public function __construct()
	{
		parent::__construct();
	}

	public function verifyAuth($email, $senha)
	{
		$sql = "SELECT id, usuario, email, senha FROM Usuarios WHERE email = ? AND senha = sha1(?)";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $email);
		$stmt->bindValue(2, $senha);

		$stmt->execute();

		return $stmt->fetchObject("App\\Model\\LoginModel");
	}
}

?>
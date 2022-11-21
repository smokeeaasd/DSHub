<?php

namespace App\DAO;

class ResetPasswordDAO extends DAO
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getEmail($email)
	{
		$sql = "SELECT * FROM Usuarios WHERE email = ?";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $email);

		$stmt->execute();

		return $stmt->fetchObject("App\\Model\\ResetPasswordModel");
	}

	public function update($email, $password)
	{
		$sql = "UPDATE Usuarios SET senha = SHA1(?) WHERE email = ?";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $password);
		$stmt->bindValue(2, $email);

		$stmt->execute();
	}
}

?>
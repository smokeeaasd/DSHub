<?php

namespace App\DAO;

class RegisterDAO extends DAO
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

		return $stmt->fetchObject("App\\Model\\LoginModel");
	}

	public function insert($email, $username, $password)
	{
		$sql = "INSERT INTO Usuarios(email, usuario, senha) VALUES(?, ?, sha1(?))";

		$stmt = $this->conexao->prepare($sql);

		$stmt->bindValue(1, $email);
		$stmt->bindValue(2, $username);
		$stmt->bindValue(3, $password);

		$stmt->execute();
	}
}

?>
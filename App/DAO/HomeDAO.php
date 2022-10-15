<?php

namespace App\DAO;

use \PDO;

class HomeDAO extends DAO
{
	public function __construct()
	{
		parent::__construct();
	}

	public function select()
	{
		$sql = "
			SELECT r.id, r.titulo, r.autor_id, r.codigo, r.linguagem, r.descricao, u.id, u.usuario
			FROM Repositorios r
			JOIN Usuarios u on (u.id = r.autor_id);
		";

		$stmt = $this->conexao->prepare($sql);

		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}
}

?>
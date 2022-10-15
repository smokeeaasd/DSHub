<?php

namespace App\Model;

use App\DAO\HomeDAO;

class HomeModel extends Model
{
	public $id, $titulo, $autor_id, $linguagem, $codigo, $descricao;

	public function getAllRows()
	{
		$dao = new HomeDAO();

		$this->rows = $dao->select();
	}
}

?>
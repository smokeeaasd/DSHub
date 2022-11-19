<?php

namespace App\Model;

use App\DAO\RegisterDAO;

class RegisterModel extends Model
{
	public $id, $usuario, $email, $senha;

	public function temEmail()
	{
		$dao = new RegisterDAO();

		return $dao->getEmail($this->email);
	}

	public function save()
	{
		$dao = new RegisterDAO();

		$dao->insert($this->email, $this->usuario, $this->senha);
	}
}

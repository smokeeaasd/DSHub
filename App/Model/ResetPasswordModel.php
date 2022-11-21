<?php

namespace App\Model;

use App\DAO\ResetPasswordDAO;

class ResetPasswordModel extends Model
{
	public $id, $email, $senha;

	public function checkEmail()
	{
		$dao = new ResetPasswordDAO();

		return $dao->getEmail($this->email);
	}

	public function save()
	{
		$dao = new ResetPasswordDAO();

		$dao->update($this->email, $this->senha);
	}
}

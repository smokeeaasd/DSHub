<?php

namespace App\DAO;

use \PDO;

use \PDOException;

abstract class DAO
{
	protected $conexao;

	public function __construct()
	{
		$dsn = "mysql:host=" . $_ENV['db']['host'] . ";dbname=" . $_ENV['db']['database'];

		try
		{
			$this->conexao = new PDO($dsn, $_ENV['db']['user'], $_ENV['db']['pass']);
		}
		catch (PDOException $err)
		{
			echo "Ocorreu um erro: " . $err->getMessage();
		}
	}
}

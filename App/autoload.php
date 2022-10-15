<?php

spl_autoload_register(function ($classname) {
	$arquivo = BASEDIR . '/' . $classname . '.php';

	if (file_exists($arquivo))
		include $arquivo;
	else
		exit('Arquivo não encontrado:' . $arquivo . '<br/>');
});

?>
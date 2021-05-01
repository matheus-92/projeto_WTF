<?php

	require "../../app-pintagueira/tecnico.model.php";
	require "../../app-pintagueira/tecnico.service.php";
	require "../../app-pintagueira/conexao.php";


	$tecnico = new Tecnico();

	$tecnico ->__set('tecnico', $_POST['tecnico']);

	$conexao = new conexao();

	$gestorService = new GestorService($conexao, $gestor);

?>
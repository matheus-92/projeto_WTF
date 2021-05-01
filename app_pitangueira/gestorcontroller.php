<?php

	require "../../app-pintagueira/gestor.model.php";
	require "../../app-pintagueira/gestor.service.php";
	require "../../app-pintagueira/conexao.php";


	$gestor = new Gestor();

	$gestor ->__set('gestor', $_POST['gestor']);

	$conexao = new conexao();

	$gestorService = new GestorService($conexao, $gestor);

?>
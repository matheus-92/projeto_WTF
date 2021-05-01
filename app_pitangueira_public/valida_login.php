<?php


	//Iniciar a sessão
	session_start();

	//verifica se usuário é válido
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = array(1 => 'Gestor', 2 => 'Tecnico');

	$usuarios_app = array(
		array('id' => 1, 'perfil_id' =>1, 'email' => 'gestor@email.com', 'senha' => '123456'),
		array('id' => 2, 'perfil_id' =>2,'email' => 'tecnico@email.com', 'senha' => 'abcd'),
	);

	
	foreach ($usuarios_app as $user) {
		

		if($user['email'] == $_POST['email'] && $user['senha']==$_POST['senha']){

			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];

			print_r($user['id']); 

		}
	}

	if($usuario_autenticado){ 

		$_SESSION['autenticado'] = 'SIM';
		$SESSION['id'] = $usuario_id;
		$SESSION['perfil_id'] = $usuario_perfil_id;
		header('Location: home.php');

	}else{
		$_SESSION['autenticado'] = 'NÃO';
		header('Location: index.php?login=erro');

	}


?>
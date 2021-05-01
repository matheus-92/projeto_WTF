<?php
	
	class Gestor{
		private $id_gestor;
		private $nome_gestor;
		private $id_perfil;
		private $email_gestor;
		private $senha_gestor;

	}

	public function __get($atributo) {
		return $this -> $atributo;
	}

	public function __set($atributo, $valor) { 
		$this -> $atributo = $valor;
	}

?>
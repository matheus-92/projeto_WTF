<?php
	
	class Tecnico{
		private $id_tecnico;
		private $nome_tecnico;
		private $id_perfil;
		private $email_tecnico;
		private $senha_tecnico;

	}

	public function __get($atributo) {
		return $this -> $atributo;
	}

	public function __set($atributo, $valor) { 
		$this -> $atributo = $valor;
	}

?>
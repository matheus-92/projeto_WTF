<?php
	
	class Chamado{
		private $id_chamado;
		private $nome_cliente;
		private $id_tecnico;
		private $tipo_nome_atendimento;
		private $data_execucao;
		private $observacao;

	}

	public function __get($atributo) {
		return $this -> $atributo;
	}

	public function __set($atributo, $valor) { 
		$this -> $atributo = $valor;
	}

?>
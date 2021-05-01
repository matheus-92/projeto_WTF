<?php
	
	class GestorService{ 

		private $conexao;
		private $gestor;

		public function __construct($conexao, $gestor){

			$this -> conexao = $conexao ->conectar();
			$this -> gestor = $gestor;

		}

		public function gestorinserir(){
			$sql = "INSERT INTO tb_tecnico(nome_tecnico, id_perfil, email_tecnico, senha_tecnico, id_gestor) VALUES (?,?,?,?,?)";
			$stmt= $conexao->prepare($sql);
			$stmt->bind_param("sissi", $nome_tecnico, $id_perfil, $email_tecnico, $senha_tecnico, $id_gestor);
			$stmt->execute();

				
		}

		public function gestorrecuperar(){

			if($_POST['nome_cliente'] == null && $_POST['nome_tecnico'] == null && $_POST['nome_tipo_atendimento'] == null){

				$sql = "SELECT * FROM tb_chamados"; 
				$stmt = $conexao->prepare($sql); 
				$Stmt->execute();
				$result = $stmt->get_result(); 
				$user = $result->fetch_assoc();
			
			}elseif ($_POST['nome_cliente'] == null && $_POST['nome_tecnico'] == null){

				$sql = "SELECT * FROM tb_chamados WHERE nome_tipo_atendimento=?"; 
				$stmt = $conexao->prepare($sql); 
				$stmt->bind_param("s", $nome_tipo_atendimento);
				$Stmt->execute();
				$result = $stmt->get_result(); 
				$user = $result->fetch_assoc()

			}elseif ($_POST['nome_cliente'] == null && $_POST['nome_tipo_atendimento'] == null) {
				
				$sql = "SELECT * FROM tb_chamados WHERE nome_tecnico=?"; 
				$stmt = $conexao->prepare($sql); 
				$stmt->bind_param("s", $nome_tecnico);
				$Stmt->execute();
				$result = $stmt->get_result(); 
				$user = $result->fetch_assoc()
			
			}elseif ($_POST['nome_tecnico'] == null && $_POST['nome_tipo_atendimento'] == null) {
				
				$sql = "SELECT * FROM tb_chamados WHERE nome_cliente=?"; 
				$stmt = $conexao->prepare($sql); 
				$stmt->bind_param("s", $nome_cliente);
				$Stmt->execute();
				$result = $stmt->get_result(); 
				$user = $result->fetch_assoc()
			
			}elseif($_POST['nome_tipo_atendimento'] == null){

				$sql = "SELECT * FROM tb_chamados WHERE nome_cliente=? AND nome_tecnico=?"; 
				$stmt = $conexao->prepare($sql); 
				$stmt->bind_param("ss", $nome_cliente, $nome_tecnico);
				$Stmt->execute();
				$result = $stmt->get_result(); 
				$user = $result->fetch_assoc()

			}elseif($_POST['nome_tecnico'] == null){

				$sql = "SELECT * FROM tb_chamados WHERE nome_cliente=? AND nome_tipo_atendimento=?"; 
				$stmt = $conexao->prepare($sql); 
				$stmt->bind_param("ss", $nome_cliente, $nome_tipo_atendimento);
				$Stmt->execute();
				$result = $stmt->get_result(); 
				$user = $result->fetch_assoc()

			}elseif($_POST['nome_cliente'] == null){

				$sql = "SELECT * FROM tb_chamados WHERE nome_tecnico=? AND nome_tipo_atendimento=?"; 
				$stmt = $conexao->prepare($sql); 
				$stmt->bind_param("ss", $nome_tecnico, $nome_tipo_atendimento);
				$Stmt->execute();
				$result = $stmt->get_result(); 
				$user = $result->fetch_assoc()

			}

			
		}

		public function gestoratualizar(){


		}

		public function gestorremover(){



		}



	}



?>
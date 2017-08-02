<?php	
	include_once ("Usuario.class.php");
	include_once ("../BD/MySQL.class.php");
	include_once ("../BD/BancoDeDados.class.php");
	include_once ("../BD/Configuracao.inc.php");
	class controleUsuario {
		
		public function insert($usuarios){
			$conexao = new MySQL();
			$query = "INSERT INTO usuario (id,nome,idade,sexo)
						VALUES('".$usuarios->getLogin()."','".$usuarios->getSenha()."','".$usuarios->getEmail()."','".$usuarios->getNome()."')";
			
			$conexao->executa($query);
		
	}
		public function listar(){
			$conexao = new MySQL();
			
			$query = "SELECT * FROM usuario";
			
			$a = $conexao->consulta($query);
			
			foreach($a as $dados){
					
				$nome = $dados['nome'];
				$idade = $dados['idade'];
				$sexo = $dados['sexo'];
				$id = $dados['id'];
						
				$usuario = new Usuario($nome,$idade,$sexo,$id);
					
				$usuarios[] = $usuario;
			}
			return $usuarios;
		}
			
			public function getByID($id){
				$conexao= new MySQL();
				
				$query = "SELECT * FROM usuario WHERE id = '$id'";
				$dados = $conexao->consulta($query);
				
				foreach($dados as $dado){
					$login = $dado['login'];
					$senha = $dado['senha'];
					$nome = $dado['nome'];
					$email = $dado['email'];
					}
				
				
				
				
				
				@$usuarios = $dados[0];
				
				
				$Usuario = new Usuario($nome,$email,$senha,$login);
				
				
				return $Usuario;
			}
			public function alterarUsuario($Usuario){

				$conexao = new MySQL();
				
				$login = $Usuario->getLogin();
				$senha = $Usuario->getSenha();
				$nome = $Usuario->getNome();
				$email = $Usuario->getEmail();
				$id	= $Usuario->getId();
		
				$query = "UPDATE usuario SET login = '".$login."', email = '".$email."', nome = '".$nome."' WHERE id = ".$id." ";//VERIFICAR NOME DA TABELA
		
				$conexao ->executa($query);
				
			}public function excluirUsuario($Id){
	
				$conexao = new MySQL();
				
				$query = "DELETE FROM usuario WHERE id = $Id";

				
				$conexao -> executa($query);
			}
	}
		
		
	
	
?>
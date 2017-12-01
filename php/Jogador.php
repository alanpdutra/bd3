<?php


	include_once("Connection.php");

	class Jogador{
		private $id = "", $nome = "", $matricula = "", $time = "", $apelido = "";


		/* GETS */

		function getId(){
			return $this->id;
		}
		function getNome(){
			return $this->nome;
		}
		function getMatricula(){
			return $this->matricula;
		}
		function getApelido(){
			return $this->apelido;
		}
		function getTime(){
			return $this->time;
		}

		/* SETS */

		function setNome($nome){
			$this->nome = $nome;
		}
		function setMatricula($matricula){
			$this->matricula = $matricula;
		}
		function setApelido($apelido){
			$this->apelido = $apelido;
		}
		function setTime($time){
			$this->time = $time;
		}

		/* MÉTODOS DA CLASSE */

// -------------------- ADICIONAR -------------------- 
		
		public function Adicionar(){
			$pg = Connection::DBConnect();
			try{
				
				$pg->query("INSERT INTO jogador (nome, apelido, matricula, id_time) values ('{$this->nome}', '{$this->apelido}', '{$this->matricula}', '{$this->time}');");
				//CODIGO PARA DEBUGAR A QUERY
				/*if ($mysql->error) {
					die($mysql->error);
				}*/
			}catch(Exception $e){
				echo 'Erro' . $e->getMessage();
			}
		}

// -------------------- LISTAR -------------------- 

		public function Listar(){
			$pg = Connection::DBConnect();
			$dados = [];
			try{
				$times = $pg->query("SELECT * from jogador");
				while($row = pg_fetch_assoc($times)){
					$dados[] = $row;
				}
			}catch(Exception $e){
				echo 'Erro' . $e->getMessage();
			}
			return $dados;
		}

// -------------------- EDITAR -------------------- 

		public function Editar($id){
			$pg = Connection::DBConnect();
			try{
				
				$pg->query("UPDATE time SET (nome, apelido, matricula, id_time) values ('{$this->nome}', '{$this->apelido}', '{$this->matricula}', '{$this->time}') WHERE id_jogador = {$this->id};");
			}catch(Exception $e){
				echo 'Erro' . $e->getMessage();
			}
		}


// -------------------- EXCLUIR -------------------- 

		public function Excluir($id){
			$pg = Connection::DBConnect();
			try{
				
				$pg->query("DELETE FROM jogador WHERE id_jogador = {$this->id};");
			}catch(Exception $e){
				echo 'Erro' . $e->getMessage();
			}
		}

// -------------------- LISTAR CONDÔMINOS -------------------- 
	
	// public static function ListarCondominos(){
	// 	$mysql = Connection::DBConnect();
	// 	$dados = [];
	// 	try{
	// 		$condominios = $mysql->query("SELECT p.id_pessoa, p.nome, c.id_condominio FROM pessoa p
	// 									inner join condominio c on c.id_condominio = p.id_condominio;");
	// 		while($row = mysqli_fetch_assoc($condominios)){
	// 			$dados[] = $row;
	// 		}
	// 	}catch(Exception $e){
	// 		echo 'Erro' . $e->getMessage();
	// 	}
	// 	return $dados;			
	// 	}	




	}
	
	
 ?>
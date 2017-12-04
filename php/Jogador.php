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
			//echo "INSERT INTO jogador (nome, apelido, matricula, id_time) values ('{$this->nome}', '{$this->apelido}', '{$this->matricula}', '{$this->time}');";
			$pg = Connection::DBConnect();
			try{
				$resultado = pg_query($pg, "INSERT INTO jogador (nome, apelido, matricula, id_time) values ('{$this->nome}', '{$this->apelido}', '{$this->matricula}', {$this->time});");
				if($resultado == true){
					header('Location: http://localhost:8888/bd3/listarJogadores.php?situacao=1');
				}else{
					header('Location: http://localhost:8888/bd3/log.php?situacao=0&tipo=jogador');
				}
					//CODIGO PARA DEBUGAR A QUERY
					/*if ($mysql->error) {
						mysql->error);
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
				$times = pg_query($pg, "SELECT j.id_jogador, j.nome, j.apelido, j.matricula, t.nome as timenome
										from jogador j
										inner join tabletime t on t.id_time = j.id_time
										order by j.id_jogador");
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
				
				$pg->query("UPDATE jogador SET (nome, apelido, matricula, id_time) values ('{$this->nome}', '{$this->apelido}', '{$this->matricula}', '{$this->time}') WHERE id_jogador = {$this->id};");
			}catch(Exception $e){
				echo 'Erro' . $e->getMessage();
			}
		}


// -------------------- EXCLUIR -------------------- 

		static public function Excluir($id){
			$pg = Connection::DBConnect();
			try{
				
				$pg->query("DELETE FROM jogador WHERE id_jogador = {$this->id};");
			}catch(Exception $e){
				echo 'Erro' . $e->getMessage();
			}
		}

// ----------------- MOSTRAR LOGS ----------------

		public function ListarLogs(){
			$pg = Connection::DBConnect();
			$dados = [];
			try{
				$logs = pg_query($pg, "SELECT * from log order by 1 desc");
				while($row = pg_fetch_assoc($logs)){
					$dados[] = $row;
				}
			}catch(Exception $e){
				echo 'Erro' . $e->getMessage();
			}
			return $dados;
		}






	}
	
	
 ?>
<?php


	include_once("Connection.php");

	class Time{
		private $id = "", $nome = "", $sigla = "", $endereco = "", $cidade = "", $estado = "";


		/* GETS */

		function getId(){
			return $this->id;
		}
		function getNome(){
			return $this->nome;
		}
		function getEndereco(){
			return $this->endereco;
		}
		function getSigla(){
			return $this->sigla;
		}
		function getEstado(){
			return $this->estado;
		}
		function getCidade(){
			return $this->cidade;
		}

		/* SETS */

		function setNome($nome){
			$this->nome = $nome;
		}
		function setEndereco($endereco){
			$this->endereco = $endereco;
		}
		function setEstado($estado){
			$this->estado = $estado;
		}
		function setCidade($cidade){
			$this->cidade = $cidade;
		}
		function setSigla($sigla){
			$this->sigla = $sigla;
		}

		/* MÉTODOS DA CLASSE */

// -------------------- ADICIONAR -------------------- 
		
		public function Adicionar(){
			$pg = Connection::DBConnect();
			try{				
				$resultado = pg_query($pg, "INSERT INTO tabletime (nome, sigla, endereco, estado, cidade) values ('{$this->nome}', '{$this->sigla}', '{$this->endereco}', '{$this->estado}', '{$this->cidade}');");
				if(!$resultado == true){
					header('Location: http://localhost:8888/bd3/listarTimes.php?situacao=1');
				}else{
					header('Location: http://localhost:8888/bd3/log.php?situacao=0&tipo=time');
				}				
			}catch(Exception $e){
				echo 'Erro' . $e->getMessage();
			}
		}

// -------------------- LISTAR -------------------- 

		public function Listar(){
			$pg = Connection::DBConnect();
			$dados = [];
			try{
				$times = pg_query($pg, "SELECT * from tabletime order by 1");
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
				
				pg_query($pg, "UPDATE tabletime SET (nome, sigla, endereco, estado, cidade) values ('{$this->nome}', '{$this->digla}', '{$this->endereco}', '{$this->estado}', '{$this->cidade}') WHERE id_time = {$this->id};");
			}catch(Exception $e){
				echo 'Erro' . $e->getMessage();
			}
		}


// -------------------- EXCLUIR -------------------- 

		public function Excluir($id){
			$pg = Connection::DBConnect();
			try{
				
				pg_query($pg, "DELETE FROM tabletime WHERE id_time = {$this->id};");
			}catch(Exception $e){
				echo 'Erro' . $e->getMessage();
			}
		}

	
	// -------------------- LISTAR TIMES -------------------- 
	
	public static function listarTimes(){
		$pg = Connection::DBConnect();
		$dados = [];
		try{
			$jogadores = pg_query($pg, "SELECT id_time, nome FROM tabletime");
			while($row = pg_fetch_assoc($jogadores)){
				$dados[] = $row;
			}
		}catch(Exception $e){
			echo 'Erro' . $e->getMessage();
		}
		return $dados;			
		}	



}
	
	
 ?>
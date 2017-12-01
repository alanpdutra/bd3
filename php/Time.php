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
				
				$pg->query("INSERT INTO tabletime (nome, sigla, endereco, estado, cidade) values ('{$this->nome}', '{$this->digla}', '{$this->endereco}', '{$this->estado}', '{$this->cidade}');");
				if ($pg->error) {
					die($pg->error);
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
				$times = $pg->query("SELECT * from tabletime");
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
				
				$pg->query("UPDATE tabletime SET (nome, sigla, endereco, estado, cidade) values ('{$this->nome}', '{$this->digla}', '{$this->endereco}', '{$this->estado}', '{$this->cidade}') WHERE id_time = {$this->id};");
			}catch(Exception $e){
				echo 'Erro' . $e->getMessage();
			}
		}


// -------------------- EXCLUIR -------------------- 

		public function Excluir($id){
			$pg = Connection::DBConnect();
			try{
				
				$pg->query("DELETE FROM tabletime WHERE id_time = {$this->id};");
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
	// }



}
	
	
 ?>
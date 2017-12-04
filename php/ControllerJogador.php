<?php 

	include ("Jogador.php");



	$jog = new Jogador();
	
	if(!isset($_POST['action'])){
		$action = $_GET['action'];
	}
	else {
		$action = $_POST['action'];
	}
	

	$jog->setNome($_POST['nome']);
	$jog->setMatricula($_POST['matricula']);
	$jog->setApelido($_POST['apelido']);
	$jog->setTime($_POST['time']);

	// $action = $_GET['action'];

	switch($action){
		case 'add':
			$jog->Adicionar();
			break;
		case 'edit':
			$jog->Editar($_POST('id'));
			break;
		case 'delete':
			$jog->Excluir($_POST('id'));
			break;
		case 'list':
			$jog->Listar();
			break;
	}
 ?>
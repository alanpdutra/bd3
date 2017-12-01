<?php 
	

	include ("Jogador.php");



	$jog = new Jogador();

	$action = $_POST['action'];

	$jog->setNome($_POST['nome']);
	$jog->setMatricula($_POST['matricula']);
	$jog->setApelido($_POST['apelido']);
	$jog->setTime($_POST['time']);

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
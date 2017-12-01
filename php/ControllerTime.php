<?php 

	@require_once("Time.php");
	
	$time = new Time();

	$action = $_POST['action'];


	$time->setNome($_POST['nome']);
	$time->setSigla($_POST['sigla']);
	$time->setEndereco($_POST['endereco']);
	$time->setEstado($_POST['estado']);
	$time->setCidade($_POST['cidade']);

	echo $this->cidade;

	switch($action){
		case 'add':
			$time->Adicionar();
			break;
		case 'edit':
			$time->Editar($_POST('id'));
			break;
		case 'delete':
			$time->Excluir($_POST('id'));
			break;
		case 'list':
			$time->Listar();
			break;
	}
 ?>
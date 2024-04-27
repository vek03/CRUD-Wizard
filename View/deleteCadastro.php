<?php
	require_once("controller/controller.php");

	$controller = new controller();
	$resultado = $controller->excluir($_GET['id']);

?>
<?php
	$url = $_SERVER['PHP_SELF'];
	$parts = explode("/", $url);

	$actionMap = [
		'findatutor' => 'signup',
		'becomeatutor' => 'signup',
		'apiconsumers' => 'signup',
		'contentproviders' => 'signup',
		'tutoringagencies' => 'signup',
		'contactus' => 'signup',
		'howitworks' => 'signup',
		'search' => 'search',
		'question' => 'question',
		'signup' => 'signup' ];
		
	if ( sizeof($parts) == 3 ) {
		$action = $actionMap[$parts[2]];
	} else {
		$action = 'main';
	}

	require_once 'template.php';

	require_once $action . 'View.php';
	require_once $action . 'Controller.php';
	$controllerClass = $action . 'Controller';
	$controller = new $controllerClass();
	
	$viewArgs = '';
	if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {	
		$viewArgs = $controller->doPost();
	} else {
		$viewArgs = $controller->doGet();
	}

	$viewClass = $action . 'View';
	render($viewClass, $viewArgs);
?>

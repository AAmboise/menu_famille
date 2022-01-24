<?php

// Autoload
require '../vendor/autoload.php';

// Nom de la route
$route = !empty($_SERVER['REQUEST_URI'])
	? substr($_SERVER['REQUEST_URI'], 1)
	: null
;

// Routeur basique
switch ($route){

	// Page d'accueil (Par défaut ou si url == null/index.php/index)
	default:
	case null:
	case 'index.php':
	case 'index':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->home();
		break;

	// Page addUser
	case 'addUser':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->addUser();
		break;

	// TODO Autres liens
}
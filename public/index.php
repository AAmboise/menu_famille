<?php

// Autoload
require '../vendor/autoload.php';

// Nom de la route
$route = !empty($_GET['routeur'])
	? $_GET['routeur']
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
		echo $homeController->accueil();
		break;

	// Page d'inscription
	case 'inscription':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->inscription();
		break;

	// Page de connexion
	case 'connexion':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->connexion();
		break;

	// Page de vérification
	case 'verification':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->verification();
		break;

	// Page Espace Membres
	case 'espace-membre':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->espace_membre();
		break;


	// Page addUser
	case 'addUser':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->addUser();
		break;

	// Page de deconnexion
	case 'deconnexion':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->deconnexion();
		break;

	// Page de a propos
	case 'apropos':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->apropos();
		break;
}
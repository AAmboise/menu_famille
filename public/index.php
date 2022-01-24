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
	//case 'index':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->accueil();
		break;

	// Page d'inscription
	case 'inscription.php':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->inscription();
		break;

	// Page de connexion
	case 'connexion.php':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->connexion();
		break;

	// Page de vérification
	case 'verification.php':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->verification();
		break;

	// Page Espace Membres
	case 'espace-membre.php':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->espace_membre();
		break;


	// Page addUser
	case 'addUser.php':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->addUser();
		break;

	// Page de deconnexion
	case 'deconnexion.php':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->deconnexion();
		break;

	// Page de a propos
	case 'apropos.php':
		$homeController = new \MenuFamille\Controller\HomeController();
		echo $homeController->apropos();
		break;
}
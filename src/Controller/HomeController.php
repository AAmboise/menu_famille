<?php

namespace MenuFamille\Controller;

/**
 * Class HomeController
 */
class HomeController
{
    /**
     * Page d'accueil
     */
    public function accueil()
    {
        // Gestion des données à afficher dans cette partie
        $texte = 'Données récupérées';

        include("../template/accueil.php");
    }

    /**
     * Page d'inscription
     */
    public function inscription()
    {
        // Données à récupérer
        // $texte = '';

        include("../template/inscription.php");
    }

    /**
     * Page de connexion
     */
    public function connexion()
    {
        // Données à récupérer
        // $texte = '';

        include("../template/connexion.php");
    }

    /**
     * Page de vérification
     */
    public function verification()
    {
        // Données à récupérer
        // $texte = '';

        include("../template/verification.php");
    }

    /**
     * Page d'espace membre
     */
    public function espace_membre()
    {
        // Données à récupérer
        // $texte = '';

        include("../template/espace-membre.php");
    }

    /**
     * Page d'ajout d'user
     */
    public function addUser()
    {
        // Données à récupérer
        //$texte = '';

        include("../template/addUser.php");
    }

    /**
     * Page de deconnexion
     */
    public function deconnexion()
    {
        // Données à récupérer
        // $texte = '';

        include("../template/deconnexion.php");
    }

    /**
     * Page d'a propos
     */
    public function apropos()
    {
        // Données à récupérer
        // $texte = '';

        include("../template/apropos.php");
    }
}
